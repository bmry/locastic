<?php

namespace ContainerI76gbrv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBase64StringToImageCoverterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Base64StringToImageCoverter' shared autowired service.
     *
     * @return \App\Service\Base64StringToImageCoverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Base64StringToImageCoverter.php';

        return $container->privates['App\\Service\\Base64StringToImageCoverter'] = new \App\Service\Base64StringToImageCoverter(($container->services['kernel'] ?? $container->get('kernel', 1)));
    }
}
