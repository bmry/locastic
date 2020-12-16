<?php

namespace App\Exception\VerificationRequest;


class DuplicateVerificationRequestException extends VerificationRequestException
{
    const MESSAGE = "You have a pending verification request already.";

    public function __construct(\Throwable $previous = null)
    {
        parent::__construct(self::MESSAGE, 409, $previous);
    }

}