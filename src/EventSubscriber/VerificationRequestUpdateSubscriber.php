<?php


namespace App\EventSubscriber;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Event\VerificationRequest\VerificationRequestUpdateEvent;
use App\Exception\VerificationRequest\VerificationOperationDeniedException;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
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
     * VerificationRequestUpdateSubscriber constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        RequestStack $requestStack,
        FileUploader $fileUploader
    )
    {
        $this->entityManager = $entityManager;
        $this->request  = $requestStack->getCurrentRequest();
        $this->fileUploader = $fileUploader;
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

        if($this->request->files->has('image')){
            $uploadedImage = $this->request->files->get('image');
            $imagePath = $this->fileUploader->upload($uploadedImage);
            $verificationRequest->setImagePath($imagePath);
        }
        
        $this->entityManager->flush();

    }
}