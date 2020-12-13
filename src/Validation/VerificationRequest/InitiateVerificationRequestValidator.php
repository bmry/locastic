<?php

namespace App\Validation\VerificationRequest;

use App\Exception\VerificationRequest\VerificationRequestMissingParameterException;

class InitiateVerificationRequestValidator
{
    /**
     * @var NonDuplicateVerificationRequestValidator
     */
    private $nonDuplicateValidator;

    /**
     * @var VerificationRequestParameterValidator
     */
    private $verificationRequestParameterValidator;

    public function __construct(
        NonDuplicateVerificationRequestValidator $nonDuplicateVerificationRequestValidator,
        VerificationRequestParameterValidator $verificationRequestParameterValidator
    )
    {
        $this->nonDuplicateValidator = $nonDuplicateVerificationRequestValidator;
        $this->verificationRequestParameterValidator= $verificationRequestParameterValidator;
    }


    /**
     * @throws VerificationRequestMissingParameterException
     * @throws \App\Exception\VerificationRequest\DuplicateVerificationRequestException
     */
    public function validate()
    {
        $this->verificationRequestParameterValidator->validate();
        $this->nonDuplicateValidator->validate();
    }

}