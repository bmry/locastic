<?php

namespace Container26vmqVw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateBlogControllerActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Locastic\Blog\UpdateBlogControllerAction' shared autowired service.
     *
     * @return \App\Controller\Locastic\Blog\UpdateBlogControllerAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Locastic/Blog/UpdateBlogControllerAction.php';

        return $container->services['App\\Controller\\Locastic\\Blog\\UpdateBlogControllerAction'] = new \App\Controller\Locastic\Blog\UpdateBlogControllerAction();
    }
}
