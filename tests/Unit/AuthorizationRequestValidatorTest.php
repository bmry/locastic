<?php


namespace App\Tests\Unit;


use App\Entity\Microservice;
use App\Entity\RedirectUrl;
use App\Exception\Blog\BlogNotFoundException;
use App\Repository\MicroserviceRepository;
use App\Validation\AuthRequestValidator;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class AuthorizationRequestValidatorTest extends TestCase
{
    /**
     * @var MockObject
     */
    private $appClientRepositoryMock;

    private $baseUriRepositoryMock;

    public function setUp()
    {
        $this->appClientRepositoryMock = $this->createMock(MicroserviceRepository::class);
        $this->baseUriRepositoryMock = $this->createMock(RedirectUrlRepository::class);

    }

//    public function testThatMissingParameteExceptionIsThrownIfClientIDIsMissing()
//    {
//        $request = new Request([], [], [], [], [], []);
//        $requestStack = new RequestStack();
//        $requestStack->push($request);
//        $requestStack->getCurrentRequest()->query->get('client_id');
//        $authRequestValidator =
//            new AuthRequestValidator(
//                $requestStack,
//                $this->appClientRepositoryMock,
//            $this->baseUriRepositoryMock
//            );
//        $this->expectException(AuthMissingParameterException::class);
//        $authRequestValidator->validate();
//
//    }
//
//    public function testThatMissingParameterExceptionIsThrownIfResponseTypeIsMissing()
//    {
//        $request = new Request([
//            'request_uri' => 'www.unknown.com',
//            'client_id'=> 1],
//            [], [], [], [], []
//        );
//
//        $requestStack = new RequestStack();
//        $requestStack->push($request);
//        $authRequestValidator =
//            new AuthRequestValidator(
//                $requestStack,
//                $this->appClientRepositoryMock,
//                $this->baseUriRepositoryMock
//            );
//        $this->expectException(AuthMissingParameterException::class);
//        $authRequestValidator->validate();
//
//    }
//
//    public function testThatInvalidResponseTypeExceptionIsThrownIfResponseTypeIsNotSupported()
//    {
//        $appClient = new AppClient();
//        $this->appClientRepositoryMock->method('findOneBy')
//                                ->willReturn($appClient);
//        $request = new Request([
//            'request_uri' => 'www.unknown.com',
//            'client_id'=> 1,
//            'response_type' => 'codes',
//        ],
//            [], [], [], [], []
//        );
//
//        $requestStack = new RequestStack();
//        $requestStack->push($request);
//        $authRequestValidator =
//            new AuthRequestValidator(
//                $requestStack,
//                $this->appClientRepositoryMock,
//                $this->baseUriRepositoryMock
//            );
//        $this->expectException(AuthInvalidResponseType::class);
//        $authRequestValidator->validate();
//    }
//
//    public function testThatExceptionIsThrownIfClientIDIsNotValid()
//    {
//        $appClient =null;
//        $baseURI = new BaseUri();
//        $this->appClientRepositoryMock->method('findOneBy')
//            ->willReturn($appClient);
//
//        $this->baseUriRepositoryMock->method('findOneBy')
//                ->willReturn($baseURI);
//        $request = new Request([
//            'request_uri' => 'www.unknown.com',
//            'client_id'=> 23,
//            'response_type' => 'codes',
//        ],
//            [], [], [], [], []
//        );
//``
//        $requestStack = new RequestStack();
//        $requestStack->push($request);
//        $authRequestValidator =
//            new AuthRequestValidator(
//                $requestStack,
//                $this->appClientRepositoryMock,
//                $this->baseUriRepositoryMock
//            );
//        $this->expectException(ClientNotFoundException::class);
//        $authRequestValidator->validate();
//    }
    public function testThatValidationIsSuccessFulIfValidParametersArePassed()
    {
        $appClient = new Microservice();
        $baseURI = new RedirectUrl();
        $this->appClientRepositoryMock->method('findOneBy')
            ->willReturn($appClient);

        $this->baseUriRepositoryMock->method('findOneBy')
            ->willReturn($baseURI);
        $request = new Request([
            'request_uri' => 'www.unknown.com',
            'client_id'=> 23,
            'response_type' => 'code',
        ],
            [], [], [], [], []
        );

        $requestStack = new RequestStack();
        $requestStack->push($request);
        $authRequestValidator =
            new AuthRequestValidator(
                $requestStack,
                $this->appClientRepositoryMock,
                $this->baseUriRepositoryMock
            );

        $response = null;
        try {
            $authRequestValidator->validate();
        }catch (BlogNotFoundException $exception){
            $response = $exception;
        }

        $this->assertNull($response);
    }
}