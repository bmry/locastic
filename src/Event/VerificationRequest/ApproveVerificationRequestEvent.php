<?php


namespace App\Event\VerificationRequest;


use App\Entity\VerificationRequest;
use Symfony\Contracts\EventDispatcher\Event;

class ApproveVerificationRequestEvent extends Event
{
    public const NAME = 'verification_request.approve';

    protected $verificationRequest;

    public function __construct(VerificationRequest $verificationRequest)
    {
        $this->verificationRequest = $verificationRequest;
    }

    public function getVerificationRequest(): VerificationRequest
    {
        return $this->verificationRequest;
    }

}