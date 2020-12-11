<?php

namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $encoder;

    public const USER_FIXTURE_REFERENCE = 'test-user';

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('360admin@360alumni.com');
        $password = $this->encoder->encodePassword($user, 'Sambam1955@@');
        $user->setPassword($password);
        $user->setIsVerified(true);
        $roles = ['ROLE_USER','ROLE_360_ADMIN'];
        $user->setRoles($roles);
        $manager->persist($user);

        $user = new User();
        $user->setEmail('msowner@360alumni.com');
        $password = $this->encoder->encodePassword($user, 'Sambam1955@@');
        $user->setPassword($password);
        $user->setIsVerified(true);
        $roles = ['ROLE_USER','ROLE_MS_OWNER'];
        $user->setRoles($roles);
        $manager->persist($user);
        
        $manager->flush();
        $this->addReference(UserFixture::USER_FIXTURE_REFERENCE, $user);
    }

}