<?php

namespace ContainerA7aGiMe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.aDz1WHK.App\Entity\User' shared service.
     *
     * @return \App\Entity\User
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.aDz1WHK": it references class "App\\Entity\\User" but no such service exists.');
    }
}
