<?php

namespace App\Tests\Unit\RegistrationTest;


use App\Controller\Gatekeeper\Registration\RegisterMSOwnerControllerAction;
use App\Model\Registration\Registration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;


class RegisterMSOwnerControllerActionTest extends TestCase
{
    public function testThatMSOwnerRegistrationIsDispatchedWhenRegistrationActionCalled()
    {
        $eventDispatcherMock = $this->getMockBuilder(EventDispatcher::class)
            ->getMock();
        $eventDispatcherMock->expects($this->once())
            ->method('dispatch');

        $registerMSOwnerController = new RegisterMSOwnerControllerAction();
        $registrationData = new Registration();
        $registrationData->setEmail('test_user@360alumni.com');
        $registrationData->setPassword('Password123@@');
        $registerMSOwnerController->__invoke($registrationData, $eventDispatcherMock);
    }

}