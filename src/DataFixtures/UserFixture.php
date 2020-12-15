<?php

namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $encoder;


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@locastic.com');
        $user->setFirstName("Toni");
        $user->setLastName("Locastic");
        $password = $this->encoder->encodePassword($user, 'Sambam1955@@');
        $user->setPassword($password);
        $roles = ['ROLE_USER','ROLE_ADMIN'];
        $user->setRoles($roles);
        $manager->persist($user);
        $this->addReference('admin_user', $user);

        $user = new User();
        $user->setEmail('morayo@locastic.com');
        $user->setFirstName("Morayo");
        $user->setLastName("Locastic");
        $password = $this->encoder->encodePassword($user, 'Sambam1955@@');
        $user->setPassword($password);
        $roles = ['ROLE_USER'];
        $user->setRoles($roles);
        $manager->persist($user);
        $this->addReference('unverified_user', $user);

        $user = new User();
        $user->setEmail('blogger@locastic.com');
        $user->setFirstName("Blogger");
        $user->setLastName("Locastic");
        $password = $this->encoder->encodePassword($user, 'Sambam1955@@');
        $user->setPassword($password);
        $roles = ['ROLE_USER','ROLE_BLOGGER'];
        $user->setRoles($roles);
        $manager->persist($user);
        $this->addReference('blogger_user', $user);


        $user = new User();
        $user->setEmail('blogger2@locastic.com');
        $user->setFirstName("Blogger2");
        $user->setLastName("Locastic");
        $password = $this->encoder->encodePassword($user, 'Sambam1955@@');
        $user->setPassword($password);
        $roles = ['ROLE_USER','ROLE_BLOGGER'];
        $user->setRoles($roles);
        $manager->persist($user);
        $this->addReference('blogger_user_2', $user);
        $manager->flush();
    }


}