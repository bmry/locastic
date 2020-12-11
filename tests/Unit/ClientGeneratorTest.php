<?php

namespace App\Tests\Unit;


use App\Service\ClientGenerator;
use PHPUnit\Framework\TestCase;

class ClientGeneratorTest extends TestCase
{
    public function testThatClientCredentialIsGenerated()
    {
        $clientGenerator = new ClientGenerator();
        $credentials = $clientGenerator->generateClientCredential();

        $this->assertArrayHasKey('clientId', $credentials);
        $this->assertArrayHasKey('clientSecret', $credentials);

        $this->assertNotNull($credentials['clientId'], 'ClientId must be generated');
        $this->assertNotNull($credentials['clientSecret'], 'ClientSecret must be generated');

    }
}