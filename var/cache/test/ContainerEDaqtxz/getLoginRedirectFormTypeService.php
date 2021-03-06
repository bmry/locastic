<?php

namespace ContainerEDaqtxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginRedirectFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Form\LoginRedirectFormType' shared autowired service.
     *
     * @return \App\Form\LoginRedirectFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/LoginRedirectFormType.php';

        return $container->privates['App\\Form\\LoginRedirectFormType'] = new \App\Form\LoginRedirectFormType();
    }
}
