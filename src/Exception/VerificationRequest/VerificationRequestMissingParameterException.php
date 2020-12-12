<?php

namespace App\Exception\VerificationRequest;


class VerificationRequestMissingParameterException extends VerificationRequestException
{
    public function __construct(string $missingParameter, \Throwable $previous = null)
    {
        parent::__construct(sprintf('"%s" is required', $missingParameter), 400, $previous);
    }


}