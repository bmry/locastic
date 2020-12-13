<?php
/**
 * Created by PhpStorm.
 * User: morayobamgbose
 * Date: 12/12/2020
 * Time: 8:45 PM
 */

namespace App\Controller\Locastic\VerificationRequest;


use App\Entity\VerificationRequest;
use App\Event\VerificationRequest\DeclineVerificationRequestEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeclineVerificationRequestAction
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
        $declineVerificationRequestEvent = new DeclineVerificationRequestEvent($data);
        $eventDispatcher->dispatch($declineVerificationRequestEvent, DeclineVerificationRequestEvent::NAME);

        return new JsonResponse(

            ["message" => "Verification request has been approved"]
        );
    }
}