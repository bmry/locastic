<?php

namespace App\Tests\Functional\VerificationRequest;

use App\Entity\Enum\EnumVerificationRequestStatusType;
use App\Tests\Functional\BaseTest;

class ListVerificationRequestTest extends BaseTest
{
    public function test_That_Access_Denied_Response_Is_Returned_If_User_With_Non_ADMIN_ROLE_List_Verification_Request()
    {

        $user = 'morayo@locastic.com';
        $bearerToken = $this->getUserToken($user);
        $response = $this->client->request('GET', '/verification_requests',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ]
            ]

        );

        $this->assertResponseStatusCodeSame(403);

    }

    public function test_That_Admin_Success_Response_Is_Returned_If_Admin_List_Verification_Request()
    {
        $user = 'admin@locastic.com';
        $bearerToken = $this->getUserToken($user);
        $response = $this->client->request('GET', '/verification_requests',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ]
            ]

        );

        $this->assertResponseIsSuccessful();
        dump($response);
        exit;
    }
}