<?php

namespace App\Event\VerificationRequest;


use App\Entity\VerificationRequest;

class DeclineVerificationRequestEvent
{
    public const NAME = 'verification_request.decline';

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