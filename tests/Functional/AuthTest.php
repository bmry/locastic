<?php

namespace App\Tests\Functional;

use App\Entity\Microservice;


class AuthTest extends BaseTest
{
    public function testThatUserCanAuthenticate()
    {
        $url = $this->router->generate('app_token');
        $body = ['scope' => 'openid', 'email' => 'temi@360alumni.com', 'password' => 'Morayo1234@@'];

        $crawler = $this->client->request(
            'POST', $url,$body
            );

        $this->assertResponseIsSuccessful();
        $response = $this->client->getResponse()->getContent();

        $this->assertContains('access_token', $response);
        $this->assertContains('token_type', $response);
        $this->assertContains('expires_in', $response);
        $this->assertContains('scope', $response);
        $this->assertContains('id_token', $response);

    }

}