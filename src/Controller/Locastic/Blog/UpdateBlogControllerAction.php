<?php


namespace App\Controller\Locastic\Blog;


use App\Entity\Blog;
use App\Exception\Blog\BlogNotFoundException;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UpdateBlogControllerAction
{
    /**
     * @param Blog $data
     * @return JsonResponse
     */
    public function __invoke(
        Blog $data,
        EntityManagerInterface $entityManager)
    {
        $entityManager->persist($data);
        $entityManager->flush();

        return $data;
    }

}