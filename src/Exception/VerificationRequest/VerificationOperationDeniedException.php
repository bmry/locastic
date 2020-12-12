<?php

namespace App\Exception\VerificationRequest;


use App\Exception\LocasticException;

class VerificationOperationDeniedException extends VerificationRequestException
{
    const MESSAGE = "You are not allowed to perform this operation on a verification request";

    public function __construct(\Throwable $previous = null)
    {
        parent::__construct(self::MESSAGE, 403, $previous);
    }

}