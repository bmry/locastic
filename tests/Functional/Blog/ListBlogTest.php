<?php

namespace App\Tests\Functional\Blog;


use App\Tests\Functional\BaseTest;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;


class ListBlogTest extends BaseTest
{
    use RefreshDatabaseTrait;
    public function testThatAllUsersCanListBlog()
    {
        $response = $this->client->request(
            'GET', '/blogs'
        );

        $this->assertResponseIsSuccessful();
    }
}