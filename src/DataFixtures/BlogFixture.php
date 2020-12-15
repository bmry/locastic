<?php


namespace App\DataFixtures;


use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BlogFixture extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $blog = new Blog();
        $blog->setContent("This locastic blog");
        $blog->setTitle("Locastic Blog");
        $blog->setUser($this->getReference('blogger_user'));
        $manager->persist($blog);

        $blog = new Blog();
        $blog->setContent("This locastic blog");
        $blog->setTitle("Locastic Blog By Another Blog");
        $blog->setUser($this->getReference('blogger_user_2'));
        $manager->persist($blog);
        $manager->flush();
    }



    public function getDependencies()
    {
        return array(
            UserFixture::class,
        );
    }


}