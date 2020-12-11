<?php

namespace App\Tests\Unit\RegistrationTest;


use App\Entity\User;
use App\Exception\RegistrationException\RegistrationException;
use App\Model\Registration\Registration;
use App\Repository\UserRepository;
use App\Validation\RegistrationValidator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Validator\Validation;

class RegistrationValidationTest extends TestCase
{
    private $validator;
    private $userRepositoryMock;
    protected $parameterBagMock;

    public function setUp()
    {
        $this->validator = Validation::createValidatorBuilder()->enableAnnotationMapping()->getValidator();
        $this->userRepositoryMock = $this->createMock(UserRepository::class);
        $this->parameterBagMock = $this->createMock(ParameterBagInterface::class);

    }

    public function testThatMicroserviceOwnerWithNo360EmailDomainIsDeniedAccess()
    {
        $registrationData = new Registration();
        $registrationData->setEmail('user@gmail.com');
        $registrationData->setPassword("360Alumni@@");
        $registrationValidator = new RegistrationValidator(
            $this->validator,
            $this->userRepositoryMock,
            $this->parameterBagMock
            );
        $errorMessage = 'Invalid email address';
        $this->expectException(RegistrationException::class);
        $this->expectExceptionMessage($errorMessage);
        $registrationValidator->validateRegistration($registrationData);
    }

    public function testThatRegistrationExceptionIsThrownIfInvalidEmailIsProvided()
    {
        $registrationData = new Registration();
        $registrationData->setEmail('user@360alumni');
        $registrationData->setPassword("360Alumni@@");
        $registrationValidator = new RegistrationValidator(
            $this->validator,
            $this->userRepositoryMock,
            $this->parameterBagMock
        );
        $errorMessage = 'The email "user@360alumni" is not a valid email.';
        $this->expectException(RegistrationException::class);
        $this->expectExceptionMessage($errorMessage);
        $registrationValidator->validateRegistration($registrationData);
    }

    public function testThatRegistrationExceptionIsThrownIfPasswordIsNotValid()
    {
        $registrationData = new Registration();
        $registrationData->setEmail('user@360alumni.com');
        $registrationData->setPassword("360Alumni");
        $errorMessage = 'Password must contain at least one lower, one uppercase alpha character, one digit,one special character and must be at least 7 character long';
        $registrationValidator = new RegistrationValidator(
            $this->validator,
            $this->userRepositoryMock,
            $this->parameterBagMock
        );
        $this->expectException(RegistrationException::class);
        $this->expectExceptionMessage($errorMessage);
        $registrationValidator->validateRegistration($registrationData);
    }

    public function testThatRegistrationExceptionIsThrownIfUserAlreadyExist()
    {
        $user = new User();
        $this->userRepositoryMock->method('findOneBy')->willReturn($user);
        $this->parameterBagMock->method('get')->willReturn("360alumni.com");
        $registrationData = new Registration();
        $registrationData->setEmail('user@360alumni.com');
        $registrationData->setPassword("360Alumni@@");
        $this->expectException(RegistrationException::class);
        $errorMessage = 'User with same email address already exist';
        $this->expectExceptionMessage($errorMessage);
        $registrationValidator = new RegistrationValidator(
            $this->validator,
            $this->userRepositoryMock,
            $this->parameterBagMock
        );
        $registrationValidator->validateRegistration($registrationData);
    }

    public function testThatNoExceptionIsThrownIfEmailAndPasswordAreValid()
    {
        $this->parameterBagMock->method('get')->willReturn("360alumni.com");
        $registrationData = new Registration();
        $registrationData->setEmail('user@360alumni.com');
        $registrationData->setPassword("360Alumni@@");
        $exception = null;
        try{
            $registrationValidator = new RegistrationValidator(
                $this->validator,
                $this->userRepositoryMock,
                $this->parameterBagMock
            );
            $registrationValidator->validateRegistration($registrationData);
        }catch (RegistrationException $registrationException){
            $exception  = $registrationException;
        }

        $this->assertNull($exception, 'Exception should not be thrown if email and password are valid');
    }
}