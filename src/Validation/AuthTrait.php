<?php

namespace App\Validation;


use App\Exception\Blog\AuthInvalidResponseType;
use App\Form\AppClientType;

trait AuthTrait
{
    /**
     * @param string $responseType
     * @throws AuthInvalidResponseType
     */
    protected function validateResponseType(string $responseType): void
    {
        if(!in_array($responseType, array_values(AppClientType::ALLOWED_GRANT_TYPES))){
            throw new AuthInvalidResponseType();
        }
    }
}