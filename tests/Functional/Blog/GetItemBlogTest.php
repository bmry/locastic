<?php


namespace App\Tests\Functional\Blog;


use App\Tests\Functional\BaseTest;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class GetItemBlogTest extends BaseTest
{
    use RefreshDatabaseTrait;

    public function test_That_Success_Response_Is_Returned_If_Users_Try_To_Get_Blog()
    {

        $blog = $this->getBlogByUser('blogger@locastic.com');

        $response = $this->client->request(
            'GET', '/blogs/'.$blog->getId()
        );

        $this->assertResponseIsSuccessful();
    }
}