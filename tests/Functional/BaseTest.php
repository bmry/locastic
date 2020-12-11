<?php

namespace App\Tests\Functional;


use App\Entity\Microservice;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Routing\RouterInterface;

class BaseTest extends WebTestCase
{
    /**
     * @var KernelBrowser
     */
    protected $client;

    /**
     * @var EntityManager $entityManager
     */
    protected $entityManager;

    protected $appContainer;

    /**
     * @var RouterInterface $router
     */
    protected $router;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->client = static::createClient();
        $this->appContainer = self::$kernel->getContainer();
        $this->entityManager = $this->appContainer->get('doctrine')->getManager();
        $this->router = $this->appContainer->get('router');

    }

    protected function login(){
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('test_user@360alumni.com');

        $this->client->loginUser($testUser);
    }

    protected function getTestAppClient()
    {
        $appClientRepo= $this->entityManager->getRepository(Microservice::class);
        /** @var Microservice $appClient */
        $appClient = $appClientRepo->find(1);

        return $appClient;
    }
}