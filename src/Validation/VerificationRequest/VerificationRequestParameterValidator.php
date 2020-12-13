<?php

namespace App\Validation\VerificationRequest;


use App\Exception\VerificationRequest\VerificationRequestMissingParameterException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class VerificationRequestParameterValidator
{

    /**
     * @var Request
     */
    private $request;

    public function __construct(
        RequestStack $requestStack
    )
    {
        $this->request = $requestStack->getCurrentRequest();
    }

    /**
     * @throws VerificationRequestMissingParameterException
     */
    public function validate():void
    {
        if (!$this->request->files->has('image')) {
            throw new VerificationRequestMissingParameterException("Image");
        }

    }
}