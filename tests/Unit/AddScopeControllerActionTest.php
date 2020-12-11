<?php

namespace App\Tests\Unit;


use App\Controller\Gatekeeper\Microservices\AddScopeControllerAction;
use App\Entity\Microservice;
use App\Entity\MicroserviceScope;
use App\Factory\MicroserviceScopeFactory;
use App\Repository\MicroserviceRepository;
use App\Repository\MicroserviceScopeRepository;
use App\Validation\ScopeBodyValidator;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class AddScopeControllerActionTest extends TestCase
{
    protected $securityMock;
    protected $requestMock;
    protected $microserviceScopeRepositoryMock;
    protected $scopeBodyValidator;
    protected $microserviceRepositoryMock;
    protected $entityManagerInterfaceMock;
    protected $microserviceScopeFactory;


    public function setUp()
    {
        $this->securityMock = $this->createMock(Security::class);
        $this->microserviceRepositoryMock = $this->createMock(MicroserviceRepository::class);
        $this->microserviceScopeRepositoryMock = $this->createMock(MicroserviceScopeRepository::class);
        $this->scopeBodyValidator = new ScopeBodyValidator();
        $this->entityManagerInterfaceMock = $this->createMock(EntityManagerInterface::class);
        $this->microserviceScopeFactory = $this->getMockBuilder(MicroserviceScopeFactory::class)
            ->disableOriginalConstructor()->setMethods(['createNewScope'])
            ->getMock();

    }

    public function testThatErrorResponseIsReturnedIfMicroserviceIsInvalid()
    {
        $request = new Request(
            [],
            [],
            ['microserviceId' => "IOEJQJR838761820032817362"],
            [],
            [],
            []
        );

        $addScopeController = new AddScopeControllerAction();

        $response = $addScopeController->__invoke(
            $request,
            $this->microserviceRepositoryMock,
            $this->securityMock,
            $this->scopeBodyValidator,
            $this->entityManagerInterfaceMock,
            $this->microserviceScopeRepositoryMock,
            $this->microserviceScopeFactory
        );

        $this->assertEquals(404, $response->getStatusCode());
    }

    public function testThatErrorResponseIsReturnedIfAddScopeNameIsMissingInvalid()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"\", \"description\": \"Edit Profile\"}
            ]
        }";

        $request = new Request(
            [],
            [],
            ['microserviceId' => "IOEJQJR838761820032817362"],
            [],
            [],
            [],
            $scopeBody
        );

        $microservice = new Microservice();
        $this->microserviceRepositoryMock->method('findOneBy')
                ->willReturn($microservice);

        $addScopeController = new AddScopeControllerAction();
        $response = $addScopeController->__invoke(
            $request,
            $this->microserviceRepositoryMock,
            $this->securityMock,
            $this->scopeBodyValidator,
            $this->entityManagerInterfaceMock,
            $this->microserviceScopeRepositoryMock,
            $this->microserviceScopeFactory
        );


        $this->assertEquals(400, $response->getStatusCode());
        $this->assertContains(ScopeBodyValidator::SCOPE_NAME_MISSING, $response->getContent());
    }

    public function testThatErrorResponseIsReturnedIfAddScopeDescriptionIsMissingInvalid()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"add_event\"}
            ]
        }";

        $request = new Request(
            [],
            [],
            ['microserviceId' => "IOEJQJR838761820032817362"],
            [],
            [],
            [],
            $scopeBody
        );

        $microservice = new Microservice();
        $this->microserviceRepositoryMock->method('findOneBy')
                ->willReturn($microservice);

        $addScopeController = new AddScopeControllerAction();
        $response = $addScopeController->__invoke(
            $request,
            $this->microserviceRepositoryMock,
            $this->securityMock,
            $this->scopeBodyValidator,
            $this->entityManagerInterfaceMock,
            $this->microserviceScopeRepositoryMock,
            $this->microserviceScopeFactory
        );


        $this->assertEquals(400, $response->getStatusCode());
        $this->assertContains(ScopeBodyValidator::SCOPE_DESCRIPTION_MISSING, $response->getContent());
    }


    public function testThatNewScopeIsCreatedIfScopeDoesIsNotAlreadyExisiting()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"add_event\", \"description\": \"Add Event\"}
            ]
        }";

        $request = new Request(
            [],
            [],
            ['microserviceId' => "IOEJQJR838761820032817362"],
            [],
            [],
            [],
            $scopeBody
        );

        $microservice = new Microservice();
        $this->microserviceRepositoryMock->method('findOneBy')
            ->willReturn($microservice);


        $this->microserviceScopeRepositoryMock->method('findOneBy')
            ->willReturn(null);

        $microserviceScope = new MicroserviceScope();
        $this->microserviceScopeFactory->expects($this->once())
           ->method('createNewScope')
            ->willReturn($microserviceScope);

        $addScopeController = new AddScopeControllerAction();
        $response = $addScopeController->__invoke(
            $request,
            $this->microserviceRepositoryMock,
            $this->securityMock,
            $this->scopeBodyValidator,
            $this->entityManagerInterfaceMock,
            $this->microserviceScopeRepositoryMock,
            $this->microserviceScopeFactory
        );


    }

    public function testThatNewScopeIsNotCreatedIfScopeAlreadyExist()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"add_event\", \"description\": \"Add Event\"}
            ]
        }";

        $request = new Request(
            [],
            [],
            ['microserviceId' => "IOEJQJR838761820032817362"],
            [],
            [],
            [],
            $scopeBody
        );

        $microservice = new Microservice();
        $this->microserviceRepositoryMock->method('findOneBy')
            ->willReturn($microservice);


        $microserviceScope = new MicroserviceScope();
        $this->microserviceScopeRepositoryMock->method('findOneBy')
            ->willReturn($microserviceScope);


        $this->microserviceScopeFactory->expects($this->exactly(0))
           ->method('createNewScope')
            ->willReturn($microserviceScope);

        $addScopeController = new AddScopeControllerAction();
        $response = $addScopeController->__invoke(
            $request,
            $this->microserviceRepositoryMock,
            $this->securityMock,
            $this->scopeBodyValidator,
            $this->entityManagerInterfaceMock,
            $this->microserviceScopeRepositoryMock,
            $this->microserviceScopeFactory
        );

    }

    public function testThatNewScopeCanBeSuccessfullyAdded()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"add_event\", \"description\": \"Add Event\"}
            ]
        }";

        $request = new Request(
            [],
            [],
            ['microserviceId' => "IOEJQJR838761820032817362"],
            [],
            [],
            [],
            $scopeBody
        );

        $microservice = new Microservice();
        $this->microserviceRepositoryMock->method('findOneBy')
            ->willReturn($microservice);


        $microserviceScope = new MicroserviceScope();
        $this->microserviceScopeRepositoryMock->method('findOneBy')
            ->willReturn($microserviceScope);


        $this->microserviceScopeFactory->expects($this->exactly(0))
            ->method('createNewScope')
            ->willReturn($microserviceScope);

        $addScopeController = new AddScopeControllerAction();
        $response = $addScopeController->__invoke(
            $request,
            $this->microserviceRepositoryMock,
            $this->securityMock,
            $this->scopeBodyValidator,
            $this->entityManagerInterfaceMock,
            $this->microserviceScopeRepositoryMock,
            $this->microserviceScopeFactory
        );

        $this->assertContains(AddScopeControllerAction::SCOPE_CREATE_SUCCESS, $response->getContent());
    }
}