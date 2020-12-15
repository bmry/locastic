<?php

namespace App\Tests\Functional;



use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\User;
use App\Repository\BlogRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\Routing\RouterInterface;

class BaseTest extends ApiTestCase
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


    protected $jwtManager;

    protected $currentTestUser;
    /**
     * @var UserRepository
     */
    protected $userRepository;


    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->client = static::createClient();
        $this->appContainer = self::$kernel->getContainer();
        $this->entityManager = $this->appContainer->get('doctrine')->getManager();
        $this->router = $this->appContainer->get('router');
        $this->jwtManager = $this->appContainer->get('lexik_jwt_authentication.jwt_manager');
        $this->userRepository = self::$container->get(UserRepository::class);


    }

    protected function getUserToken(string $username = "morayo@locastic.com")
    {

        $testUser = $this->userRepository->findOneByEmail($username);
        $token = $this->jwtManager->create($testUser);
        $this->currentTestUser  = $testUser;

        return $token;
    }

    /**
     * @param string $userEmail
     * @return mixed
     * @throws \Doctrine\ORM\ORMException
     */
    protected function getBlogByUser(string $userEmail)
    {
        $user =  $testUser = $this->userRepository->findOneByEmail($userEmail);
        $blogRepo = self::$container->get(BlogRepository::class);
        $blog =  $blogRepo->findOneBy(['user' => $user]);

        return $blog;

    }

}