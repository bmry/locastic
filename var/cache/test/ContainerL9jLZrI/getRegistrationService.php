<?php

namespace ContainerL9jLZrI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Model\Registration\Registration' shared autowired service.
     *
     * @return \App\Model\Registration\Registration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Model/Registration/Registration.php';

        return $container->privates['App\\Model\\Registration\\Registration'] = new \App\Model\Registration\Registration();
    }
}
