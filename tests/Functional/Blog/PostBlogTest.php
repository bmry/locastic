<?php

namespace App\Tests\Functional\Blog;


use App\Tests\Functional\BaseTest;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class PostBlogTest extends BaseTest
{
    use RefreshDatabaseTrait;

    public function test_That_Unauthorized_Response_Is_Returned_If_Unauthenticated_User_Try_To_Post_Blog()
    {
        $response = $this->client->request(
            'POST',
            '/blogs',
            ['body' => ['title' => "Test Blog" , 'content' => "This is a blog Content"]]
        );

        $response = $this->client->request('POST', '/blogs',
            ['json' =>
                [
                    'title' => "Edited Blog Title" ,
                    'content' => "This is a blog Content"
                ]
            ]);

        $this->assertResponseStatusCodeSame(401);
    }

    public function test_That_Access_Denied_Response_Is_Returned_If_Unverified_User_Try_To_Post_Blog()
    {
        $bearerToken = $this->getUserToken('morayo@locastic.com');

        $response = $this->client->request('POST', '/blogs', ['headers' => [
            'Authorization' => "Bearer $bearerToken",
            'Content-Type' => 'application/json'
        ],'json' => ['title' => "Test Blog" , 'content' => "This is a blog Content"]]);

        $this->assertResponseStatusCodeSame(403);
    }


    public function test_That_Bad_Request_Response_Is_Returned_Verified_User_Try_To_Post_Blog_Without_Title()
    {
        $bearerToken = $this->getUserToken('blogger@locastic.com');

        $response = $this->client->request('POST', '/blogs', ['headers' => [
            'Authorization' => "Bearer $bearerToken",
            'Content-Type' => 'application/json'
        ],'json' => ['title' => "" , 'content' => "This is a blog Content"]]);


        $this->assertResponseStatusCodeSame(400);
    }

    public function test_That_Bad_Request_Response_Is_Returned_Verified_User_Try_To_Post_Blog_With_Empty_Content()
    {
        $bearerToken = $this->getUserToken('blogger@locastic.com');

        $response = $this->client->request('POST', '/blogs', ['headers' => [
            'Authorization' => "Bearer $bearerToken",
            'Content-Type' => 'application/json'
        ],'json' => ['title' => "Blog Title" , 'content' => ""]]);


        $this->assertResponseStatusCodeSame(400);
    }

    public function test_That_Success_Response_Is_Returned_If_Verified_User_Post_Blog_With_Title_And_Content()
    {
        $bearerToken = $this->getUserToken('blogger@locastic.com');

        $response = $this->client->request('POST', '/blogs', ['headers' => [
            'Authorization' => "Bearer $bearerToken",
            'Content-Type' => 'application/json'
        ],'json' => ['title' => "Test Blog" , 'content' => "This is a blog Content"]]);

        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
        $response = $this->client->getResponse()->getContent();
        $this->assertContains('title', $response);
        $this->assertContains('content', $response);
        $this->assertContains('post_date', $response);

        $this->assertResponseIsSuccessful();
    }


}