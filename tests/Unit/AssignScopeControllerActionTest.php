<?php

namespace App\Tests\Unit;


use App\Controller\Gatekeeper\Scope\AssignScopeControllerAction;
use App\Entity\User;
use App\Model\Scope;
use App\Repository\UserRepository;
use App\Validation\AssignedScopeValidator;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class AssignScopeControllerActionTest extends TestCase
{
    private $userRepositoryMock;
    protected $securityMock;
    protected $requestMock;
    protected $assignedScopeValidatorMock;
    protected $entityManagerInterfaceMock;

    public function setUp()
    {
        $this->securityMock = $this->createMock(Security::class);
        $this->userRepositoryMock = $this->createMock(UserRepository::class);
        $this->entityManagerInterfaceMock = $this->createMock(EntityManagerInterface::class);
        $this->assignedScopeValidatorMock = $this->createMock(AssignedScopeValidator::class);
    }

    public function testThatErrorResponseIsThrownIfUserIdIsInvalid()
    {
        $this->userRepositoryMock->method('findOneBy')
                ->willReturn(null);
        $this->securityMock->method('isGranted')->willReturn(true);
        $this->assignedScopeValidatorMock->method('validateScopeAssigning')
            ->willReturn(null);
        $scope = new Scope();
        $request = new Request(
            [],
            [],
            ['id' => "1"],
            [],
            [],
            []
        );

        $controller = new AssignScopeControllerAction();
        $response =$controller->__invoke(
            $scope,
            $this->securityMock,
            $this->entityManagerInterfaceMock,
            $this->userRepositoryMock,
            $request,
            $this->assignedScopeValidatorMock
        );


        $this->assertContains('User does not exist', $response->getContent());
        $this->assertEquals(400, $response->getStatusCode());

    }

    public function testThatErrorResponseIsReturnedIfUserIsNotClientAdmin()
    {
        $user = new User();
        $this->userRepositoryMock->method('findOneBy')
            ->willReturn($user);
        $this->securityMock->method('isGranted')->willReturn(false);
        $this->assignedScopeValidatorMock->method('validateScopeAssigning')
            ->willReturn(null);
        $scope = new Scope();
        $request = new Request(
            [],
            [],
            ['id' => "1"],
            [],
            [],
            []
        );

        $controller = new AssignScopeControllerAction();
        $response =$controller->__invoke(
            $scope,
            $this->securityMock,
            $this->entityManagerInterfaceMock,
            $this->userRepositoryMock,
            $request,
            $this->assignedScopeValidatorMock
        );


        $this->assertContains('Permission denied', $response->getContent());
        $this->assertEquals(403, $response->getStatusCode());

    }

    public function testThatErrorResponseIsThrownIfUserTryToAssignScopesHeLacks()
    {
        $user = new User();
        $scopes = ['events'  => ['edit']];

        $user->setScopes($scopes);
                $scopeSubmitted = "{
          \"profile\": [\"add\",\"edit\"],
          \"transaction\": [\"debit\", \"credit\"]
        }";
        $this->userRepositoryMock->method('findOneBy')
            ->willReturn($user);
        $validator = new AssignedScopeValidator();
        $this->securityMock->method('isGranted')
            ->will($this->onConsecutiveCalls('ROLE_CLIENT_ADMIN', 'ROLE_360_ADMIN'))
            ->willReturn(true);

        $scope = new Scope();
        $request = new Request(
            [],
            [],
            ['id' => "1"],
            [],
            [],
            [],
            $scopeSubmitted
        );

        $controller = new AssignScopeControllerAction();
        $response = $controller->__invoke(
            $scope,
            $this->securityMock,
            $this->entityManagerInterfaceMock,
            $this->userRepositoryMock,
            $request,
            $validator
        );

        $this->assertEquals(403, $response->getStatusCode());
    }

    public function testThatScopeIsAssignedSuccessfullyProvidedUserHasScopes()
    {$user = new User();
        $scopes = ['events'  => ['list']];

        $user->setScopes($scopes);
        $scopeSubmitted = "{
          \"events\": [\"list\"]
        }";
        $this->userRepositoryMock->method('findOneBy')
            ->willReturn($user);
        $validator = new AssignedScopeValidator();
        $this->securityMock->method('isGranted')
            ->will($this->onConsecutiveCalls('ROLE_CLIENT_ADMIN', 'ROLE_360_ADMIN'))
            ->willReturn(true);

        $scope = new Scope();
        $request = new Request(
            [],
            [],
            ['id' => "1"],
            [],
            [],
            [],
            $scopeSubmitted
        );

        $controller = new AssignScopeControllerAction();
        $response = $controller->__invoke(
            $scope,
            $this->securityMock,
            $this->entityManagerInterfaceMock,
            $this->userRepositoryMock,
            $request,
            $validator
        );


        $this->assertContains(AssignScopeControllerAction::SCOPE_ASSIGN_SUCCESS, $response->getContent());
        $this->assertEquals('200', $response->getStatusCode());
    }
}