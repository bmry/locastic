<?php


namespace App\DataPersister;


namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Entity\Blog;
use Symfony\Component\Security\Core\Security;

final class BlogDataPersister implements ContextAwareDataPersisterInterface
{
    private $security;

    private $decorated;

    public function __construct(ContextAwareDataPersisterInterface $decorated, Security $security)
    {
        $this->security = $security;
        $this->decorated = $decorated;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Blog;
    }

    public function persist($data, array $context = [])
    {
        $user = $this->security->getUser();
        $data->setUser($user);
        $data = $this->decorated->persist($data, $context);

        return $data;
    }

    public function remove($data, array $context = [])
    {
        // call your persistence layer to delete $data
    }
}