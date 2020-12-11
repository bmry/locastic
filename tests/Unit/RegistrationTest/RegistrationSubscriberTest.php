<?php

namespace App\Tests\Unit\RegistrationTest;


use App\Events\MicroserviceOwnerRegistrationEvent;
use App\EventSubscriber\RegistrationSubscriber;
use App\Exception\RegistrationException\RegistrationException;
use App\Model\Registration\Registration;
use App\Security\EmailVerifier;
use App\Service\GatekeeperMailer;
use App\Validation\RegistrationValidator;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationSubscriberTest extends TestCase
{

    protected $userPasswordEncoderInterfaceMock;

    protected $entityManagerMock;

    protected $parameterBagMock;

    protected $emailVerifierMock;

    protected $registrationValidatorMock;

    protected $requestStackMock;

    private $encodedPassword;

    private $gatekeeperMailer;


    public function setUp()
    {
        $this->userPasswordEncoderInterfaceMock = $this->createMock(UserPasswordEncoderInterface::class);
        $this->entityManagerMock = $this->createMock(EntityManagerInterface::class);
        $this->parameterBagMock = $this->createMock(ParameterBagInterface::class);
        $this->requestStackMock = $this->createMock(RequestStack::class);
        $this->registrationValidatorMock = $this->createMock(RegistrationValidator::class);
        $this->encodedPassword = '$argon2id$v=19$m=65536,t=4,p=1$WGhUNUhhZ3IwaXd6elkxSA$pQ6EYkVLP7qZ9gVAek8riwFvAVOSDNrTUJNTEE6nFH8';
        $this->gatekeeperMailer = $this->createMock(GatekeeperMailer::class);
        $this->parameterBagMock->method('get')
            ->will($this->onConsecutiveCalls('360admin@admin.com', '360Admin'));
    }


    public function testThatValidationIsPerformedDuringRegistration()
    {

        $this->userPasswordEncoderInterfaceMock
            ->expects($this->once())
            ->method('encodePassword')
            ->willReturn($this->encodedPassword);

        $this->registrationValidatorMock
                    ->expects($this->once())
                    ->method('validateRegistration');

        $registrationSubcriber = new RegistrationSubscriber(
            $this->userPasswordEncoderInterfaceMock,
            $this->entityManagerMock,
            $this->parameterBagMock,
            $this->registrationValidatorMock,
            $this->requestStackMock,
            $this->gatekeeperMailer
        );

        $registration = new Registration();
        $registration->setEmail('test@user.com');
        $registration->setPassword('Password123@@');
        $msOwnerEvent = new MicroserviceOwnerRegistrationEvent($registration);
        $registrationSubcriber->onMicroserviceOwnerRegister($msOwnerEvent);
    }


    public function testThatUsersIsNotRegisteredIfValidationFails()
    {
        $this->entityManagerMock
            ->expects($this->exactly(0))
            ->method('persist');
        $this->entityManagerMock
            ->expects($this->exactly(0))
            ->method('flush');

        $this->expectException(RegistrationException::class);
        $this->registrationValidatorMock->method('validateRegistration')
            ->will($this->throwException(new RegistrationException()));
        $registrationSubscriber = new RegistrationSubscriber(
            $this->userPasswordEncoderInterfaceMock,
            $this->entityManagerMock,
            $this->parameterBagMock,
            $this->registrationValidatorMock,
            $this->requestStackMock,
            $this->gatekeeperMailer

        );

        $registration = new Registration();
        $registration->setEmail('test@user.com');
        $registration->setPassword('Password123@@');
        $msOwnerEvent = new MicroserviceOwnerRegistrationEvent($registration);
        $registrationSubscriber->onMicroserviceOwnerRegister($msOwnerEvent);

    }

    public function testThatUsersIsRegisteredValidEmailIsValid()
    {
        $this->userPasswordEncoderInterfaceMock
            ->expects($this->once())
            ->method('encodePassword')
            ->willReturn($this->encodedPassword);
        $this->entityManagerMock
            ->expects($this->exactly(1))
            ->method('persist');
        $this->entityManagerMock
            ->expects($this->exactly(1))
            ->method('flush');

        $registrationSubcriber = new RegistrationSubscriber(
            $this->userPasswordEncoderInterfaceMock,
            $this->entityManagerMock,
            $this->parameterBagMock,
            $this->registrationValidatorMock,
            $this->requestStackMock,
            $this->gatekeeperMailer
        );

        $registration = new Registration();
        $registration->setEmail('test@user.com');
        $registration->setPassword('Password123@@');
        $msOwnerEvent = new MicroserviceOwnerRegistrationEvent($registration);
        $registrationSubcriber->onMicroserviceOwnerRegister($msOwnerEvent);

    }

    public function testThatNoVerificationEmailIsSentIfValidationFails()
    {
       $this->gatekeeperMailer
                ->expects($this->exactly(0))
                ->method('sendVerificationEmail');

        $this->expectException(RegistrationException::class);
        $this->registrationValidatorMock->method('validateRegistration')
            ->will($this->throwException(new RegistrationException()));
        $registrationSubcriber = new RegistrationSubscriber(
            $this->userPasswordEncoderInterfaceMock,
            $this->entityManagerMock,
            $this->parameterBagMock,
            $this->registrationValidatorMock,
            $this->requestStackMock,
            $this->gatekeeperMailer

        );

        $registration = new Registration();
        $registration->setEmail('test@user.com');
        $registration->setPassword('Password123@@');
        $msOwnerEvent = new MicroserviceOwnerRegistrationEvent($registration);
        $registrationSubcriber->onMicroserviceOwnerRegister($msOwnerEvent);
    }

    public function testThatVerificationEmailIsSentWhenUserIsRegistered()
    {
        $this->userPasswordEncoderInterfaceMock
            ->expects($this->once())
            ->method('encodePassword')
            ->willReturn($this->encodedPassword);
        
        $this->entityManagerMock
            ->expects($this->exactly(1))
            ->method('persist');
        $this->entityManagerMock
            ->expects($this->exactly(1))
            ->method('flush');

       $this->gatekeeperMailer
                ->expects($this->exactly(1))
                ->method('sendVerificationEmail');
        $registrationSubcriber = new RegistrationSubscriber(
            $this->userPasswordEncoderInterfaceMock,
            $this->entityManagerMock,
            $this->parameterBagMock,
            $this->registrationValidatorMock,
            $this->requestStackMock,
            $this->gatekeeperMailer

        );

        $registration = new Registration();
        $registration->setEmail('test@360alumni.com');
        $registration->setPassword('Password123@@');
        $msOwnerEvent = new MicroserviceOwnerRegistrationEvent($registration);
        $registrationSubcriber->onMicroserviceOwnerRegister($msOwnerEvent);
    }



}