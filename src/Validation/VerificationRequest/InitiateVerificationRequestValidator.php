<?php

namespace App\Validation\VerificationRequest;

use App\Entity\VerificationRequest;
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
     * @param VerificationRequest $verificationRequest
     * @throws VerificationRequestMissingParameterException
     * @throws \App\Exception\VerificationRequest\DuplicateVerificationRequestException
     * @throws \App\Exception\VerificationRequest\VerificationRequestAlreadyApprovedException
     */
    public function validate(VerificationRequest $verificationRequest)
    {
        $this->verificationRequestParameterValidator->validate($verificationRequest);
        $this->nonDuplicateValidator->validate();
    }

}