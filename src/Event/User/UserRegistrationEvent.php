<?php

namespace App\Event\User;


use App\Entity\User;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class UserRegistrationEvent
 * @package App\Events
 */
class UserRegistrationEvent extends Event
{
    public const NAME = 'user.register';

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}