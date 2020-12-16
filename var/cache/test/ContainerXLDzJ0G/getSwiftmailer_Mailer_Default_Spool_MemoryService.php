<?php

namespace ContainerXLDzJ0G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_Mailer_Default_Spool_MemoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'swiftmailer.mailer.default.spool.memory' shared service.
     *
     * @return \Swift_MemorySpool
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php';

        return $container->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool();
    }
}
