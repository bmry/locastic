<?php

namespace ContainerDypYvjf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetBlogControllerActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Locastic\Blog\GetBlogControllerAction' shared autowired service.
     *
     * @return \App\Controller\Locastic\Blog\GetBlogControllerAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Locastic/Blog/GetBlogControllerAction.php';

        return $container->services['App\\Controller\\Locastic\\Blog\\GetBlogControllerAction'] = new \App\Controller\Locastic\Blog\GetBlogControllerAction();
    }
}
