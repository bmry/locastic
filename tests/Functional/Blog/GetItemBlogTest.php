<?php


namespace App\Tests\Functional\Blog;


use App\Tests\Functional\BaseTest;

class GetItemBlogTest extends BaseTest
{
    public function test_That_Success_Response_Is_Returned_If_Users_Try_To_Get_Blog()
    {
        $response = $this->client->request(
            'GET', '/blogs/1'
        );

        $this->assertResponseIsSuccessful();
    }
}