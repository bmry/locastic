<?php

namespace App\EventSubscriber;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Entity\User;
use App\Event\VerificationRequest\ApproveVerificationRequestEvent;
use App\Event\VerificationRequest\InitiateVerificationRequestEvent;
use App\Service\LocasticMailer;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

/**
 * Class ApproveVerificationRequestSubscriber
 * @package App\EventSubscriber
 */
class ApproveVerificationRequestSubscriber implements EventSubscriberInterface
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
     * ApproveVerificationRequestSubscriber constructor.
     * @param EntityManagerInterface $entityManager
     * @param LocasticMailer $mailer
     * @param LoggerInterface $logger
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
            ApproveVerificationRequestEvent::NAME => 'onApproveVerificationRequest'
        ];
    }

    /**
     * @param ApproveVerificationRequestEvent $verificationRequestEvent
     */
    public function onApproveVerificationRequest(
        ApproveVerificationRequestEvent  $verificationRequestEvent
    ): void
    {
        $verificationRequest = $verificationRequestEvent->getVerificationRequest();

        if(!$verificationRequest->getStatus() !== EnumVerificationRequestStatusType::TYPE_APPROVED) {
            $verificationRequest->setStatus(EnumVerificationRequestStatusType::TYPE_APPROVED);
            $user = $verificationRequest->getUser();
            $user->addRole(User::ROLE_BLOGGER);
            $user->setProfilePicture($verificationRequest->getImagePath());
            $this->entityManager->flush();

            try {
                $this->mailer->sendApproveVerificationEmail($verificationRequest);
            } catch (TransportExceptionInterface $transportException) {
                $this->logger->error($transportException);
            }
        }

    }
}