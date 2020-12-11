<?php


namespace App\Validation;


use App\Entity\User;
use App\Exception\Registration\RegistrationErrorException;
use App\Repository\UserRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationValidator
{
    /**
     * @var ValidatorInterface $validator
     */
    private $validator;

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    /**
     * RegistrationValidator constructor.
     * @param ValidatorInterface $validator
     * @param UserRepository $userRepository
     * @param ParameterBagInterface $parameterBag
     */
    public function __construct(
        ValidatorInterface $validator,
        UserRepository $userRepository,
        ParameterBagInterface $parameterBag
)
    {
        $this->validator = $validator;
        $this->userRepository = $userRepository;
        $this->parameterBag = $parameterBag;
    }

    /**
     * @param  $registration
     * @throws RegistrationErrorException
     */
    public function validateRegistration(User $user):void
    {
        $errors = $this->validator->validate($user);


        if($errors->count() > 0){
            $message = $errors->get(0)->getMessage();
            throw new RegistrationErrorException($message);
        }
        $this->validateEmail($user->getEmail());

    }

    /**
     * @param string $email
     * @throws RegistrationErrorException
     */
    private function validateUniqueEmail(string $email): void
    {
        $user = $this->userRepository->findOneBy(['email' => $email]);
        if($user instanceof User){
            throw  new RegistrationErrorException("User with same email address already exist");
        }
    }

    /**
     * @param string $email
     * @throws RegistrationErrorException
     */

    private function validateEmail(string $email)
    {
        $this->validateUniqueEmail($email);
    }

}