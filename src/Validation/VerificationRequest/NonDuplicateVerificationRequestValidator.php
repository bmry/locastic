<?php

namespace App\Validation\VerificationRequest;


use App\Exception\VerificationRequest\DuplicateVerificationRequestException;
use App\Repository\VerificationRequestRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class NonDuplicateVerificationRequestValidator
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @var Security
     */
    private $security;

    /**
     * @var VerificationRequestRepository
     */
    private $verificationRequestRepository;

    public function __construct(
        Security $security,
        VerificationRequestRepository $verificationRequestRepository
    )
    {
        $this->security = $security;
        $this->verificationRequestRepository = $verificationRequestRepository;
    }

    /**
     * @throws DuplicateVerificationRequestException
     */
    public function validate():void
    {
        $user = $this->security->getUser();
        $existingVerificationRequest = $this->verificationRequestRepository->findOneBy(['user' => $user]);

        if($existingVerificationRequest){
            throw new DuplicateVerificationRequestException();
        }
    }


}