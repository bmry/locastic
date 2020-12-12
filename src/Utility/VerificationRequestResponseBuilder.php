<?php

namespace App\Utility;


use App\Entity\VerificationRequest;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class VerificationRequestResponseBuilder
{
    /**
     * @var Request
     */
    private $request;

    /**
     * VerificationRequestResponse constructor.
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack->getCurrentRequest();
    }

    public function buildResponse(VerificationRequest $verificationRequest)
    {
        $verificationRequest->setImagePath(
            $this->request->getSchemeAndHttpHost().FileUploader::UPLOAD_DIR.$verificationRequest->getImagePath());

        return $verificationRequest;
    }


}