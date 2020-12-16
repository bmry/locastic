<?php

namespace App\Tests\Functional\VerificationRequest;


use App\Exception\ImageUploadException;
use App\Exception\VerificationRequest\DuplicateVerificationRequestException;
use App\Tests\Functional\BaseTest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class InitiateVerificationRequestTest extends BaseTest
{

    public function test_That_Success_Response_Is_Returned_If_Unverified_User_Initiates_Verification_Request()
    {

        $uploadedFile = new UploadedFile(
            __DIR__.'/upload/splash.png',
            'splash.png'
        );

        $user = 'morayo@locastic.com';
        $bearerToken = $this->getUserToken($user);

        $response = $this->client->request('POST', '/verification_requests/initiate',
            [
                'headers' => [
                    'Authorization' => "Bearer $bearerToken",
                ],
                'json' => [
                    'image_string' => $this->encodeFile(__DIR__.'/upload/splash.png'),
                    'initiation_message' => "Blog Title" ]
            ]

        );

        $this->assertResponseIsSuccessful();
        $this->assertContains('verification requested', $response->toArray());

    }

    public function test_That_Unverified_User_Is_Not_Allowed_To_Make_Duplicate_Verification_Request()
    {
        $uploadedFile = new UploadedFile(
            __DIR__.'/upload/splash.png',
            'splash.png'
        );

        $user = 'morayo@locastic.com';
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
        $uploadedFile = new UploadedFile(
            __DIR__.'/upload/splash.png',
            'splash.png'
        );

        $user = 'blogger@locastic.com';
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
        $uploadedFile = new UploadedFile(
            __DIR__.'/upload/splash.png',
            'splash.png'
        );

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