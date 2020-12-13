<?php

namespace App\Controller\Locastic\VerificationRequest;


use App\Entity\VerificationRequest;
use App\Event\VerificationRequest\ApproveVerificationRequestEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApproveVerificationRequestAction
{
    /**
     * @param VerificationRequest $data
     * @param EventDispatcherInterface $eventDispatcher
     * @return JsonResponse
     */
    public function __invoke(
        VerificationRequest $data,
        EventDispatcherInterface $eventDispatcher
    ): JsonResponse
    {
        $approveVerificationRequestEvent = new ApproveVerificationRequestEvent($data);
        $eventDispatcher->dispatch($approveVerificationRequestEvent, ApproveVerificationRequestEvent::NAME);

        return new JsonResponse(

            ["message" => "Verification request has been approved"]
        );
    }

}