<?php


namespace App\Listener;


use App\Entity\VerificationRequest;
use App\Service\FileUploader;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class VerificationRequestImageLinkListener
{
    /**
     * @var Request $request
     */
    private $request;

    /**
     * VerificationRequestImageLinkListener constructor.
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack->getCurrentRequest();
    }


    public function postLoad(LifecycleEventArgs $eventArgs): void
    {
        $entity = $eventArgs->getEntity();

        if($entity instanceof VerificationRequest){

                $entity->setImagePath(
                    $this->request->getSchemeAndHttpHost() . FileUploader::UPLOAD_DIR . $entity->getImagePath());
        }
    }
}