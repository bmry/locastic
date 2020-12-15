<?php

namespace App\Tests\Functional\Blog;


use App\Tests\Functional\BaseTest;


class ListBlogTest extends BaseTest
{
    public function testThatAllUsersCanListBlog()
    {
        $response = $this->client->request(
            'GET', '/blogs'
        );

        $this->assertResponseIsSuccessful();
    }
}