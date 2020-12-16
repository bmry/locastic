<?php

namespace App\Service;


use App\Entity\VerificationRequest;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\RouterInterface;
use Twig\Environment;

class LocasticMailer
{
    const APPROVED_VERIFICATION_SUBJECT = 'Verification Request Approved';
    const DECLINED_VERIFICATION_SUBJECT = 'Verification Request Declined';

    /**
     * @var ParameterBagInterface
     */
    private  $parameterBag;

    /**
     * @var RouterInterface
     */
    private $router;

    private $mailer;
    /**
     * @var Environment
     */
    private  $twig;

    public function __construct(
        ParameterBagInterface $parameterBag,
        RouterInterface $router,
        \Swift_Mailer $mailer,
        Environment $twig

    )
    {
        $this->parameterBag = $parameterBag;
        $this->router = $router;
        $this->mailer = $mailer;
        $this->twig = $twig;

    }

    /**
     * @param string $emailAddress
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     */
    public function sendApproveVerificationEmail(VerificationRequest $verificationRequest): void
    {

        $template = "verification_request/approve_email.html.twig";
        $emailSubject =   self::APPROVED_VERIFICATION_SUBJECT;
        $user = $verificationRequest->getUser();
        $params = ['user' => $user->getFirstName()];
        $email = $this->buildEmail($verificationRequest, $template, $emailSubject, $params);

        $this->mailer->send($email);
    }

    /**
     * @param string $emailAddress
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     */
    public function sendDeclineVerificationEmail(VerificationRequest $verificationRequest): void
    {
        $template = "verification_request/decline_email.html.twig";
        $emailSubject =   self::DECLINED_VERIFICATION_SUBJECT;
        $user = $verificationRequest->getUser();
        $params = ['user' => $user->getFirstName(),'decline_reason' => $verificationRequest->getRejectionReason()];
        $email = $this->buildEmail($verificationRequest, $template, $emailSubject, $params);

        $this->mailer->send($email);
    }

    private function buildEmail(VerificationRequest $verificationRequest, string $template, string $subject, $params = [])
    {
        $senderEmail = $this->parameterBag->get('email_sender_address');
        $user = $verificationRequest->getUser();
        $receieverEmail = $user->getEmail();
        $email = (new \Swift_Message($subject))
            ->setFrom($senderEmail)
            ->setTo($receieverEmail)
            ->setBody(
                $this->twig->render(
                // templates/emails/registration.html.twig
                    $template,
                    $params
                ),
                'text/html'
            );

        return $email;
    }
}