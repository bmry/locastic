<?php

namespace App\EventSubscriber;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Event\VerificationRequest\InitiateVerificationRequestEvent;
use App\Exception\ImageUploadException;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class InitiateVerificationRequestSubscriber implements EventSubscriberInterface
{
    /**
     * @var FileUploader
     */
    private  $fileUploader;

    /**
     * @var EntityManagerInterface $entityManager
     */
    private $entityManager;

    /**
     * InitiateVerificationRequestSubscriber constructor.
     * @param FileUploader $fileUploader
     */
    public function __construct(FileUploader $fileUploader, EntityManagerInterface $entityManager)
    {
        $this->fileUploader = $fileUploader;
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents()
    {
        return [
            InitiateVerificationRequestEvent::NAME => 'onInitializeVerificationRequest'
        ];
    }

    /**
     * @param InitiateVerificationRequestEvent $verificationRequestEvent
     * @throws ImageUploadException
     */
    public function onInitializeVerificationRequest(
        InitiateVerificationRequestEvent  $verificationRequestEvent
    )
    {
        $verificationRequest = $verificationRequestEvent->getVerificationRequest();
        $image = $verificationRequest->getImage();
        $imagePath = $this->fileUploader->upload($image);
        $verificationRequest->setImagePath($imagePath);
        $verificationRequest->setStatus(EnumVerificationRequestStatusType::TYPE_VERIFICATION_REQUESTED);
        $this->entityManager->persist($verificationRequest);
        $this->entityManager->flush();

    }
}