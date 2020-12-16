<?php

namespace App\Tests\Functional\VerificationRequest;

use App\Tests\Functional\BaseTest;

class InitiateVerificationRequestTest extends BaseTest
{

    public function test_That_Success_Response_Is_Returned_If_Unverified_User_Initiates_Verification_Request()
    {
        $user = 'mob@locastic.com';
        $bearerToken = $this->getUserToken($user);

        $response = $this->client->request('POST', '/verification_requests/initiate',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'image_string' => $this->encodeFile(__DIR__.'/upload/splash.png'),
                    'initiation_message' => "First Verification Request" ]
            ]

        );

        $this->assertResponseIsSuccessful();
        $this->assertContains('verification requested', $response->toArray());

    }

    public function test_That_Unverified_User_Is_Not_Allowed_To_Make_Duplicate_Verification_Request()
    {
        $user = 'mob@locastic.com';
        $bearerToken = $this->getUserToken($user);

        $response = $this->client->request('POST', '/verification_requests/initiate',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'image_string' => $this->encodeFile(__DIR__.'/upload/splash.png'),
                    'initiation_message' => "Blog Title"
                ]
            ]

        );

        $this->assertResponseStatusCodeSame(409);
    }

    public function test_That_Verified_User_Is_Not_Allowed_To_Make_Verification_Request()
    {
        $user = 'blogger3@locastic.com';
        $bearerToken = $this->getUserToken($user);

        $response = $this->client->request('POST', '/verification_requests/initiate',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'image_string' => $this->encodeFile(__DIR__.'/upload/splash.png'),
                    'initiation_message' => "Blog Title"
                ]
            ]

        );

        $this->assertResponseStatusCodeSame(403);
    }

    public function test_That_Unverified_User_Cannot_Initiate_Verification_Request_Without_Image()
    {
        $user = 'morayo@locastic.com';
        $bearerToken = $this->getUserToken($user);

        $response = $this->client->request('POST', '/verification_requests/initiate',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'initiation_message' => "Blog Title"
                ]
            ]

        );

        $this->assertResponseStatusCodeSame(400);
    }
}