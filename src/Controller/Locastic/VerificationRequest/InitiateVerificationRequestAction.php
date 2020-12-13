<?php

namespace App\Controller\Locastic\VerificationRequest;


use App\Entity\VerificationRequest;
use App\Event\VerificationRequest\InitiateVerificationRequestEvent;
use App\Exception\VerificationRequest\VerificationRequestException;
use App\Repository\VerificationRequestRepository;
use App\Validation\VerificationRequest\InitiateVerificationRequestValidator;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @return VerificationRequest|JsonResponse
     */
    public function __invoke(
        Request $request,
        EventDispatcherInterface $eventDispatcher,
        Security $security,
        LoggerInterface $logger,
        VerificationRequestRepository $verificationRequestRepository,
        InitiateVerificationRequestValidator $verificationRequestValidator
    )
    {
        try {
            $verificationRequestValidator->validate();
            $imageFile = $request->files->get('image');
            $initiationMessage = $request->request->get('initiation_message');
            $verificationRequest = new VerificationRequest();
            $verificationRequest->setUser($security->getUser());
            $verificationRequest->image = $imageFile;
            $verificationRequest->setInitiationMessage($initiationMessage);
            $initiateVerificationRequestEvent = new InitiateVerificationRequestEvent($verificationRequest);
            $eventDispatcher->dispatch($initiateVerificationRequestEvent, InitiateVerificationRequestEvent::NAME);

            return $verificationRequest;

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