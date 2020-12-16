<?php

namespace App\Tests\Functional\VerificationRequest;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Entity\User;
use App\Service\LocasticMailer;
use App\Tests\Functional\BaseTest;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class ApproveVerificationRequestTest extends BaseTest
{
    use RefreshDatabaseTrait;

    public function test_That_Access_Denied_Is_Returned_If_Non_Admin_Try_To_Approve_Verification_Request()
    {
        $user = 'morayo@locastic.com';
        $bearerToken = $this->getUserToken($user);
        $unverified_request = $this->getVerifiedRequestByStatus(
            EnumVerificationRequestStatusType::TYPE_VERIFICATION_REQUESTED);

        $response = $this->client->request('GET', '/verification_requests/'.$unverified_request->getId().'/approve',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ]
            ]

        );

        $this->assertResponseStatusCodeSame(403);
    }

    public function test_That_Success_Response_Is_Returned_And_Status_Updated_If_Admin_Try_To_Approve_Verification_Request()
    {
        $user = 'admin@locastic.com';
        $bearerToken = $this->getUserToken($user);
        $verificationRequest = $this->getVerifiedRequestByStatus(
            EnumVerificationRequestStatusType::TYPE_VERIFICATION_REQUESTED,false);
        $verificationRequestId = $verificationRequest->getId();
        $this->client->enableProfiler();
        $response = $this->client->request('GET', '/verification_requests/'.$verificationRequestId.'/approve',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ]
            ]
        );

        $verificationRequest = $this->getVerifiedRequestById($verificationRequestId);
        $this->assertEquals(EnumVerificationRequestStatusType::TYPE_APPROVED, $verificationRequest->getStatus());

        //Assert Email is  Sent
        $mailCollector = $this->client->getProfile()->getCollector('swiftmailer');
        $this->assertSame(1, $mailCollector->getMessageCount());
        $collectedMessages = $mailCollector->getMessages();
        $message = $collectedMessages[0];
        $this->assertInstanceOf('Swift_Message', $message);
        $this->assertSame(LocasticMailer::APPROVED_VERIFICATION_SUBJECT, $message->getSubject());
        $this->assertSame('admin@locastic.com', key($message->getFrom()));
        $this->assertResponseStatusCodeSame(200);

        //Assert User get Blogger Role
        $user = $verificationRequest->getUser();
        $userRoles = $user->getRoles();
        $this->assertContains(User::ROLE_BLOGGER, $userRoles);
    }

}