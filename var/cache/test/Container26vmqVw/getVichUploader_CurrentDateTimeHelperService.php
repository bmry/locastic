<?php

namespace Container26vmqVw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_CurrentDateTimeHelperService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'vich_uploader.current_date_time_helper' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\CurrentDateTimeHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DateTimeHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/CurrentDateTimeHelper.php';

        return $container->privates['vich_uploader.current_date_time_helper'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper();
    }
}
