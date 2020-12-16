<?php

namespace App\Validation\VerificationRequest;


use App\Entity\VerificationRequest;
use App\Exception\VerificationRequest\VerificationRequestMissingParameterException;


class VerificationRequestParameterValidator
{

    /**
     * @param VerificationRequest $verificationRequest
     * @throws VerificationRequestMissingParameterException
     */
    public function validate(VerificationRequest $verificationRequest):void
    {
        if (!$verificationRequest->getImageString()) {
            throw new VerificationRequestMissingParameterException("Image");
        }

    }
}