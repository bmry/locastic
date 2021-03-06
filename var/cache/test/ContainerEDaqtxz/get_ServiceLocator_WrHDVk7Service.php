<?php

namespace ContainerEDaqtxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WrHDVk7Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.WrHDVk7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WrHDVk7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'lexik_jwt_authentication.encoder', 'getLexikJwtAuthentication_EncoderService', true],
            'httpClient' => ['privates', '.debug.http_client', 'get_Debug_HttpClientService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
        ], [
            'encoder' => '?',
            'httpClient' => '?',
            'logger' => '?',
        ]);
    }
}
