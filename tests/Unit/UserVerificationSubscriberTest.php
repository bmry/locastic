<?php

namespace App\Tests\Unit;


use App\Entity\User;
use App\Events\VerifyAccountEvent;
use App\EventSubscriber\UserVerificationSubscriber;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use SymfonyCasts\Bundle\VerifyEmail\Exception\InvalidSignatureException;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class UserVerificationSubscriberTest extends TestCase
{

    protected $entityManagerMock;
    protected $emailVerifierMock;
    protected $requestStackMock;


    public function setUp()
    {
        $this->entityManagerMock = $this->createMock(EntityManagerInterface::class);
        $this->emailVerifierMock = $this->createMock(EmailVerifier::class);
        $this->requestStackMock = $this->createMock(RequestStack::class);

    }

    public function testThatUserIsNotVerifiedIsEmailConfirmationFailsWhenVerifyEventIsDispatched()
    {

        $request = $this->createMock(Request::class);
        $this->requestStackMock->method('getCurrentRequest')
            ->willReturn($request);

        $this->expectException(InvalidSignatureException::class);
        $this->emailVerifierMock->method('handleEmailConfirmation')
            ->will($this->throwException(new InvalidSignatureException()));
        $this->entityManagerMock
            ->expects($this->exactly(0))
            ->method('flush');

        $user = new User();
        $verifyEvent = new VerifyAccountEvent($user);
        $userVerificationSubscriber = new UserVerificationSubscriber(
            $this->entityManagerMock,
            $this->emailVerifierMock,
            $this->requestStackMock
        );
        $userVerificationSubscriber->onVerifyUser($verifyEvent);

        $this->assertTrue($verifyEvent->getUser()->isVerified());
        $this->assertContains('ROLE_VERIFIED_USER', $verifyEvent->getUser()->getRoles());
    }

    public function testThatUserIsVerifiedIfEmailConfirmationIsSuccessfulWhenVerifyEventIsDispatched()
    {
        $request = $this->createMock(Request::class);
        $this->requestStackMock->method('getCurrentRequest')
            ->willReturn($request);

        $user = new User();
        $verifyEvent = new VerifyAccountEvent($user);
        $userVerificationSubscriber = new UserVerificationSubscriber(
            $this->entityManagerMock,
            $this->emailVerifierMock,
            $this->requestStackMock
        );
        $userVerificationSubscriber->onVerifyUser($verifyEvent);

        $this->assertTrue($verifyEvent->getUser()->isVerified());
        $this->assertContains('ROLE_VERIFIED_USER', $verifyEvent->getUser()->getRoles());

    }
}