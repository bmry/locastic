<?php

namespace App\Exception\VerificationRequest;


use App\Exception\LocasticException;

class VerificationOperationDeniedException extends LocasticException
{
    public function __construct(string $message = 'Operation Denied.', \Throwable $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }

}