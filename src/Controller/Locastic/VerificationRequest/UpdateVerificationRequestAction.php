<?php

namespace App\Controller\Locastic\VerificationRequest;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Entity\VerificationRequest;
use App\Event\VerificationRequest\VerificationRequestUpdateEvent;
use App\Exception\LocasticException;
use App\Exception\VerificationRequest\VerificationRequestException;
use App\Repository\VerificationRequestRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class UpdateVerificationRequestAction
{
    /**
     * @param VerificationRequest $data
     * @param EventDispatcherInterface $eventDispatcher
     * @param Security $security
     * @param LoggerInterface $logger
     * @param VerificationRequestRepository $verificationRequestRepository
     * @return VerificationRequest|JsonResponse
     */
    public function __invoke(
        VerificationRequest $data,
        EventDispatcherInterface $eventDispatcher,
        Security $security,
        LoggerInterface $logger,
        VerificationRequestRepository $verificationRequestRepository
    ){

        try {
            $verificationRequestUpdateEvent = new VerificationRequestUpdateEvent($data);
            $eventDispatcher->dispatch($verificationRequestUpdateEvent, VerificationRequestUpdateEvent::NAME);

        }catch (LocasticException  $locasticException){
            $message = [
                'message' => $locasticException->getMessage()
            ];

            $logger->error($locasticException);
            return new JsonResponse($message);
        }


        return new JsonResponse($data);

    }
}