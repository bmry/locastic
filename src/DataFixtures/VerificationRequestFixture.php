<?php


namespace App\DataFixtures;


use App\Entity\Blog;
use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Entity\VerificationRequest;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class VerificationRequestFixture extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $verificationRequest = new VerificationRequest();
        $verificationRequest->setUser($this->getReference('unverified_user'));
        $verificationRequest->setStatus(EnumVerificationRequestStatusType::TYPE_VERIFICATION_REQUESTED);
        $verificationRequest->setInitiationMessage('Please verify me');
        $verificationRequest->setImagePath('Screen-Shot-2020-12-02-at-9-53-53-AM-5fd630149f854.png');
        $manager->persist($verificationRequest);

        $verificationRequest = new VerificationRequest();
        $verificationRequest->setUser($this->getReference('unverified_user'));
        $verificationRequest->setStatus(EnumVerificationRequestStatusType::TYPE_APPROVED);
        $verificationRequest->setInitiationMessage('Please verify me');
        $verificationRequest->setImagePath('Screen-Shot-2020-12-02-at-9-53-53-AM-5fd630149f854.png');
        $manager->persist($verificationRequest);
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixture::class,
        );
    }


}