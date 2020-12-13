<?php

namespace App\EventSubscriber;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Entity\User;
use App\Event\VerificationRequest\DeclineVerificationRequestEvent;
use App\Service\LocasticMailer;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

/**
 * Class ApproveVerificationRequestSubscriber
 * @package App\EventSubscriber
 */
class DeclineVerificationRequestSubscriber implements EventSubscriberInterface
{
    /**
     * @var EntityManagerInterface $entityManager
     */
    private $entityManager;

    /**
     * @var LocasticMailer
     */
    private $mailer;

    /**
     * @var LoggerInterface $logger
     */
    private $logger;

    /**
     * DeclineVerificationRequestSubscriber constructor.
     * @param EntityManagerInterface $entityManager
     * @param LocasticMailer $mailer
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        LocasticMailer $mailer,
        LoggerInterface $logger
    )
    {
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    public static function getSubscribedEvents()
    {
        return [
            DeclineVerificationRequestEvent::NAME => 'onDeclineVerificationRequest'
        ];
    }

    /**
     * @param DeclineVerificationRequestEvent $verificationRequestEvent
     */
    public function onDeclineVerificationRequest(
        DeclineVerificationRequestEvent  $verificationRequestEvent
    ):void
    {
            $verificationRequest = $verificationRequestEvent->getVerificationRequest();
            $verificationRequest->setStatus(EnumVerificationRequestStatusType::TYPE_DECLINED);
            $user = $verificationRequest->getUser();

            if(in_array(User::ROLE_BLOGGER, $user->getRoles())){
                $roles = $user->getRoles();
                $roles = array_flip($roles);
                unset($roles[User::ROLE_BLOGGER]);
                $roles = array_flip($roles);
                $user->setRoles($roles);
            }

            $this->entityManager->flush();

            try {
                $this->mailer->sendDeclineVerificationEmail($verificationRequest);
            } catch (TransportExceptionInterface $transportException) {
                $this->logger->error($transportException);
            }

    }
}