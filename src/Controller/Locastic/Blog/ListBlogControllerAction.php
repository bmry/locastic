<?php

namespace App\Controller\Locastic\Blog;


use App\Entity\Blog;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ListBlogControllerAction
{
    /**
     * @param Blog $data
     * @return JsonResponse
     */
    public function __invoke(
        Blog $data,
        EventDispatcherInterface $eventDispatcher)
    {
        dump($data);
        exit;
    }

}