<?php

namespace App\Controller\Locastic\User;

use App\Entity\User;
use App\Event\User\UserRegistrationEvent;
use App\Exception\Registration\RegistrationErrorException;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegisterUserControllerAction
{
    /**
     * @param User $data
     * @param EventDispatcherInterface $eventDispatcher
     * @return JsonResponse
     */
    public function __invoke(
        User $data,
        EventDispatcherInterface $eventDispatcher)
    {
        try {
            $registrationEvent = new UserRegistrationEvent($data);
            $eventDispatcher->dispatch($registrationEvent, UserRegistrationEvent::NAME);
            $message = [
                'message' => "Registration successful"
            ];
            $response = new JsonResponse($message);

        }catch (RegistrationErrorException $registrationErrorException){

            $message = [
                'message' => $registrationErrorException->getMessage()
            ];

            $response = new JsonResponse($message,400);
        }

        return $response;
    }
}