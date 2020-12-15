<?php


namespace App\Tests\Functional\Blog;


use App\Tests\Functional\BaseTest;

class EditBlogTest extends BaseTest
{

    public function test_That_Bad_Request_Response_Is_Returned_If_VerifiedUser_Post_Blog_Without_Title()
    {
        $user = 'blogger@locastic.com';
        $blog = $this->getBlogByUser($user);
        $bearerToken = $this->getUserToken($user);

        $response = $this->client->request('PUT', '/blogs/'.$blog->getId(), ['headers' => [
            'Authorization' => "Bearer $bearerToken",
            'Content-Type' => 'application/json'
        ],'json' => ['title' => "" , 'content' => "This is a blog Content"]]);

        $this->assertResponseStatusCodeSame(400);
    }

    public function test_That_Success_Response_Is_Returned_If_Verified_User_Edit_BlogPost()
    {
        $user = 'blogger@locastic.com';
        $blog = $this->getBlogByUser($user);
        $bearerToken = $this->getUserToken($user);
        $response = $this->client->request('PUT', '/blogs/'.$blog->getId(), ['headers' => [
            'Authorization' => "Bearer $bearerToken",
            'Content-Type' => 'application/json'
        ],'json' => ['title' => "Edited Blog Title" , 'content' => "This is a blog Content"]]);


        $response = $this->client->getResponse()->getContent();
        $this->assertContains('Edited Blog Title', $response);

        $this->assertResponseIsSuccessful();
    }

    public function test_That_AccessDenied_Response_Is_Returned_If_Blogger_Try_To_Edit_Another_Blogger_BlogPost()
    {
        $bloggerOne = 'blogger@locastic.com';
        $bloggerTwo = 'blogger2@locastic.com';
        $bloggerTwoBlogPost = $this->getBlogByUser($bloggerTwo);

        $bearerToken = $this->getUserToken($bloggerOne);
        $response = $this->client->request('PUT', '/blogs/'.$bloggerTwoBlogPost->getId(), ['headers' => [
            'Authorization' => "Bearer $bearerToken",
            'Content-Type' => 'application/json'
        ],'json' => ['title' => "Welcome to Locastic" , 'content' => "This is a blog Content"]]);


        $this->assertResponseStatusCodeSame(403);
    }
}