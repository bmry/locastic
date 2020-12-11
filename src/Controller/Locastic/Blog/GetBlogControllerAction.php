<?php

namespace App\Controller\Locastic\Blog;


use App\Entity\Blog;
use App\Exception\Blog\BlogNotFoundException;
use App\Repository\BlogRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GetBlogControllerAction
{
    /**
     * @param Blog $data
     * @return JsonResponse
     */
    public function __invoke(
        Request $request,
        BlogRepository $blogRepository
    )
    {
       $blogId = $request->attributes->get('id');
       $blog = $blogRepository->find($blogId);

       if(!$blog instanceof Blog){
           throw new BlogNotFoundException();
       }

       return $blog;
    }

}