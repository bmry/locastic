<?php

namespace App\Controller\Locastic\VerificationRequest;


use App\Entity\VerificationRequest;
use App\Event\VerificationRequest\InitiateVerificationRequestEvent;
use App\Exception\LocasticException;
use App\Exception\VerificationRequest\VerificationRequestException;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class InitiateVerificationRequestAction
{
    /**
     * @param Request $request
     * @param EventDispatcherInterface $eventDispatcher
     * @param Security $security
     * @param LoggerInterface $logger
     * @return JsonResponse
     */
    public function __invoke(
        VerificationRequest $data,
        EventDispatcherInterface $eventDispatcher,
        Security $security,
        LoggerInterface $logger
    )
    {

        try {
            $verificationRequest = new VerificationRequest();
            $imageFile = $request->files->get('image');
            $initiationMessage = $request->request->get('initiation_message');

            if (!$imageFile) {
                throw new VerificationRequestException('Image of ID is required');
            }

            $verificationRequest->setUser($security->getUser());
            $verificationRequest->image = $imageFile;
            $verificationRequest->setInitiationMessage($initiationMessage);
            $initiateVerificationRequestEvent = new InitiateVerificationRequestEvent($verificationRequest);
            $eventDispatcher->dispatch($initiateVerificationRequestEvent, InitiateVerificationRequestEvent::NAME);
            $message = [
                'message' => "Verification request successfully submitted"
            ];

            $response = new JsonResponse($message);

        }catch (LocasticException  $locasticException){
            $message = [
                'message' => $locasticException->getMessage()
            ];

            $logger->error($locasticException);
            $response = new JsonResponse($message,500);
        }

        return $response;
    }
}