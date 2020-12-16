<?php

namespace ContainerA7aGiMe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_PropertyAccessor_StdService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.property_accessor.std' shared service.
     *
     * @return \Nelmio\Alice\PropertyAccess\StdPropertyAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/PropertyAccess/StdPropertyAccessor.php';

        return $container->privates['nelmio_alice.property_accessor.std'] = new \Nelmio\Alice\PropertyAccess\StdPropertyAccessor(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));
    }
}
