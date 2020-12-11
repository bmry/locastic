<?php


namespace App\Utility;


use Symfony\Component\HttpFoundation\JsonResponse;

class ResponseUtil
{
    public static function JsonErrorResponse($errorDescription, $status )
    {
       $response = [ 'error' => $errorDescription];

       return new JsonResponse($response);
    }

}