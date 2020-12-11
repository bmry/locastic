<?php


namespace App\Controller\Locastic\Blog;


use App\Entity\Blog;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostBlogControllerAction
{
    /**
     * @param Blog $data
     * @param EventDispatcherInterface $eventDispatcher
     * @return JsonResponse
     */
    public function __invoke(
        Blog $data,
        EntityManagerInterface $entityManager)
    {
        $data->setPostDate(new \DateTime());
        $entityManager->persist($data);
        $entityManager->flush();

        return $data;
    }
}