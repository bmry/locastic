<?php

namespace App\Controller\Locastic\VerificationRequest;


use App\Entity\VerificationRequest;
use App\Event\VerificationRequest\InitiateVerificationRequestEvent;
use App\Exception\VerificationRequest\VerificationRequestException;
use App\Repository\VerificationRequestRepository;
use App\Service\Base64StringToImageCoverter;
use App\Service\FileUploader;
use App\Validation\VerificationRequest\InitiateVerificationRequestValidator;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Security\Core\Security;

/**
 * Class InitiateVerificationRequestAction
 * @package App\Controller\Locastic\VerificationRequest
 */
class InitiateVerificationRequestAction
{
    /**
     * @param Request $request
     * @param EventDispatcherInterface $eventDispatcher
     * @param Security $security
     * @param LoggerInterface $logger
     * @param VerificationRequestRepository $verificationRequestRepository
     * @param InitiateVerificationRequestValidator $verificationRequestValidator
     * @param Base64StringToImageCoverter $base64StringToImageCoverter
     * @return VerificationRequest|JsonResponse
     * @throws \App\Exception\ImageUploadException
     */
    public function __invoke(
        VerificationRequest $data,
        EventDispatcherInterface $eventDispatcher,
        Security $security,
        LoggerInterface $logger,
        VerificationRequestRepository $verificationRequestRepository,
        InitiateVerificationRequestValidator $verificationRequestValidator,
        Base64StringToImageCoverter $base64StringToImageCoverter
    )
    {
        try {

            $verificationRequestValidator->validate($data);
            $imageString = $data->getImageString();
            $imageFile = $base64StringToImageCoverter->buildUploadFileFromBase64String($imageString);
            $data->setUser($security->getUser());
            $data->imageFile = $imageFile;
            $initiateVerificationRequestEvent = new InitiateVerificationRequestEvent($data);
            $eventDispatcher->dispatch($initiateVerificationRequestEvent, InitiateVerificationRequestEvent::NAME);

            return $data;

        }catch (VerificationRequestException  $verificationRequestException){
            $message = [
                'error' => $verificationRequestException->getMessage()
            ];

            $logger->error($verificationRequestException);
            $response = new JsonResponse($message,$verificationRequestException->getCode() );

            return $response;
        }

    }
}