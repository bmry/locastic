<?php


namespace App\Factory;


use App\Entity\MicroserviceScope;

class MicroserviceScopeFactory
{
    public function createNewScope()
    {
        return new MicroserviceScope();
    }
}