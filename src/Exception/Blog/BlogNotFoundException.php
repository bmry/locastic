<?php


namespace App\Exception\Blog;


use App\Exception\LocasticException;

class BlogNotFoundException extends LocasticException
{
    public $message = 'Blog does not exist';

}