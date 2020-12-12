<?php

namespace App\Controller\Locastic\VerificationRequest;

use App\Entity\VerificationRequest;
use App\Repository\VerificationRequestRepository;
use App\Service\FileUploader;
use App\Utility\VerificationRequestResponseBuilder;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class GetVerificationRequestAction
{

    /**
     * @param VerificationRequest $data
     * @param VerificationRequestResponseBuilder $verificationRequestResponseBuilder
     * @return VerificationRequest
     */
    public function __invoke(
        VerificationRequest $data,
        VerificationRequestResponseBuilder $verificationRequestResponseBuilder
    ){
        return $verificationRequestResponseBuilder->buildResponse($data);

    }
}