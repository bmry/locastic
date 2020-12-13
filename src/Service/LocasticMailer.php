<?php

namespace App\Service;


use App\Entity\VerificationRequest;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\RouterInterface;

class LocasticMailer
{
    /**
     * @var ParameterBagInterface
     */
    private  $parameterBag;

    /**
     * @var RouterInterface
     */
    private $router;

    private $mailer;

    public function __construct(
        ParameterBagInterface $parameterBag,
        RouterInterface $router,
        MailerInterface $mailer
    )
    {
        $this->parameterBag = $parameterBag;
        $this->router = $router;
        $this->mailer = $mailer;

    }

    /**
     * @param string $emailAddress
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     */
    public function sendApproveVerificationEmail(VerificationRequest $verificationRequest): void
    {

        $template = "verification_request/approve_email.html.twig";
        $emailSubject =   'Verification Request Declined ';
        $user = $verificationRequest->getUser();
        $email = $this->buildEmail($verificationRequest, $template, $emailSubject);
        $email->context(['user' => $user->getFirstName()]);

        $this->mailer->send($email);
    }

    /**
     * @param string $emailAddress
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     */
    public function sendDeclineVerificationEmail(VerificationRequest $verificationRequest): void
    {
        $template = "verification_request/decline_email.html.twig";
        $emailSubject =   'Verification Request Declined ';
        $user = $verificationRequest->getUser();
        $email = $this->buildEmail($verificationRequest, $template, $emailSubject);
        $email->context(['user' => $user->getFirstName(),'decline_reason' => $verificationRequest->getRejectionReason()]);

        $this->mailer->send($email);
    }

    private function buildEmail(VerificationRequest $verificationRequest, string $template, string $subject)
    {
        $senderEmail = $this->parameterBag->get('email_sender_address');
        $user = $verificationRequest->getUser();
        $receieverEmail = $user->getEmail();
        $email = (new TemplatedEmail())
            ->from($senderEmail)
            ->to($receieverEmail)
            ->subject($subject)
            ->htmlTemplate($template);


        return $email;
    }
}