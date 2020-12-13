<?php

namespace App\Exception\VerificationRequest;


class VerificationRequestAlreadyApprovedException extends VerificationRequestException
{
    const MESSAGE = "Your verification request has already been approved.";

    public function __construct(\Throwable $previous = null)
    {
        parent::__construct(self::MESSAGE, 403, $previous);
    }
}