<?php

namespace ContainerXxHCdUP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostBlogControllerActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Locastic\Blog\PostBlogControllerAction' shared autowired service.
     *
     * @return \App\Controller\Locastic\Blog\PostBlogControllerAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Locastic/Blog/PostBlogControllerAction.php';

        return $container->services['App\\Controller\\Locastic\\Blog\\PostBlogControllerAction'] = new \App\Controller\Locastic\Blog\PostBlogControllerAction();
    }
}
