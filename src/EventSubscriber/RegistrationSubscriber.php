<?php

namespace App\EventSubscriber;


use App\Event\User\UserRegistrationEvent;
use App\Validation\RegistrationValidator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationSubscriber implements EventSubscriberInterface
{
    /**
     * @var UserPasswordEncoderInterface
     */
    protected $passwordEncoder;

    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var RegistrationValidator
     */
    protected $registrationValidator;

    public function __construct(
        UserPasswordEncoderInterface $passwordEncoder,
        EntityManagerInterface $entityManager,
        RegistrationValidator $registrationValidator
)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->entityManager = $entityManager;
        $this->registrationValidator = $registrationValidator;
    }

    public static function getSubscribedEvents()
    {
        return [
            UserRegistrationEvent::NAME => 'onRegister'
        ];
    }


    public function onRegister(UserRegistrationEvent $userRegistrationEvent)
    {
        $user = $userRegistrationEvent->getUser();
        $this->registrationValidator->validateRegistration($user);
        $plainPassword = $user->getPassword();
        $user->setPassword(
            $this->passwordEncoder->encodePassword(
                $user,
                $plainPassword
            )
        );

        $this->entityManager->persist($user);
        $this->entityManager->flush();


    }
}