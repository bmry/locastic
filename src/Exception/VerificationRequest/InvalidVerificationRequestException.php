<?php

namespace App\Exception\VerificationRequest;


use App\Exception\LocasticException;

class InvalidVerificationRequestException extends VerificationRequestException
{
    public function __construct(string $message = 'Invalid Request', \Throwable $previous = null)
    {
        parent::__construct($message, 400, $previous);
    }
}