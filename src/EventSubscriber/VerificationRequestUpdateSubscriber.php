<?php


namespace App\EventSubscriber;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Event\VerificationRequest\VerificationRequestUpdateEvent;
use App\Exception\VerificationRequest\VerificationOperationDeniedException;
use App\Service\Base64StringToImageCoverter;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class VerificationRequestUpdateSubscriber implements EventSubscriberInterface
{
    /**
     * @var EntityManagerInterface $entityManager
     */
    private $entityManager;

    /**
     * @var Request $request
     */
    private $request;

    /**
     * @var FileUploader
     */
    private  $fileUploader;

    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var Base64StringToImageCoverter
     */
    private $base64StringToImageConverter;

    /**
     * VerificationRequestUpdateSubscriber constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        RequestStack $requestStack,
        FileUploader $fileUploader,
        LoggerInterface $logger,
        Base64StringToImageCoverter $base64StringToImageCoverter
    )
    {
        $this->entityManager = $entityManager;
        $this->request  = $requestStack->getCurrentRequest();
        $this->fileUploader = $fileUploader;
        $this->logger = $logger;
        $this->base64StringToImageConverter = $base64StringToImageCoverter;
    }

    public static function getSubscribedEvents()
    {
        return [
            VerificationRequestUpdateEvent::NAME => 'onUpdateVerificationRequest'
        ];
    }

    /**
     * @param VerificationRequestUpdateEvent $verificationRequestUpdateEvent
     * @throws VerificationOperationDeniedException
     * @throws \App\Exception\ImageUploadException
     */
    public function onUpdateVerificationRequest(
        VerificationRequestUpdateEvent $verificationRequestUpdateEvent
    ){
        $verificationRequest = $verificationRequestUpdateEvent->getVerificationRequest();

        if($verificationRequest->getStatus() !==
            EnumVerificationRequestStatusType::TYPE_VERIFICATION_REQUESTED){
            throw new VerificationOperationDeniedException();
        }


        if($verificationRequest->imageString){
            $imageString = $verificationRequest->imageString;
            $imageFile = $this->base64StringToImageConverter->buildUploadFileFromBase64String($imageString);
            $imagePath = $this->fileUploader->upload($imageFile);
            $verificationRequest->setImagePath($imagePath);
        }

        $this->entityManager->flush();

    }
}