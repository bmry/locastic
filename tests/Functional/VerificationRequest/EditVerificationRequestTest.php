<?php

namespace App\Tests\Functional\VerificationRequest;


use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Tests\Functional\BaseTest;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class EditVerificationRequestTest extends BaseTest
{
    use RefreshDatabaseTrait;

    public function test_That_Unverified_User_Can_Edit_Unapproved_Verification_Request()
    {
        $user = 'morayo@locastic.com';
        $bearerToken = $this->getUserToken($user);
        $unverified_request = $this->getVerifiedRequestByStatus(
            EnumVerificationRequestStatusType::TYPE_VERIFICATION_REQUESTED);


        $newMessage = "New request message";
        $response = $this->client->request('PUT', '/verification_requests/'.$unverified_request->getId(),
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'initiation_message' => $newMessage
                ]
            ]

        );

        $this->assertResponseIsSuccessful();
        $this->assertContains($newMessage, $this->client->getResponse()->getContent());
    }

    public function test_That_Unverified_User_Cannot_Edit_Approved_Verification_Request()
    {
        $user = 'user_with_approved_vr@locastic.com';
        $bearerToken = $this->getUserToken($user);
        $unverified_request = $this->getVerifiedRequestByStatus(
            EnumVerificationRequestStatusType::TYPE_APPROVED);

        $newMessage = "New request message";
        $response = $this->client->request('PUT', '/verification_requests/'.$unverified_request->getId(),
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'initiation_message' => $newMessage
                ]
            ]

        );

        $this->assertResponseStatusCodeSame(403);
    }

    public function test_That_Unverified_User_Cannot_Edit_Declined_Verification_Request()
    {
        $user = 'declined_user@locastic.com';
        $bearerToken = $this->getUserToken($user);
        $unverified_request = $this->getVerifiedRequestByStatus(
            EnumVerificationRequestStatusType::TYPE_DECLINED);

        $newMessage = "New request message";
        $response = $this->client->request('PUT', '/verification_requests/'.$unverified_request->getId(),
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'initiation_message' => $newMessage
                ]
            ]

        );

        $this->assertResponseStatusCodeSame(403);
    }


}