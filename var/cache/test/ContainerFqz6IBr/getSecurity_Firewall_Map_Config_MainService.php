<?php

namespace ContainerFqz6IBr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Config_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.config.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $container->privates['security.firewall.map.config.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, true, 'security.user.provider.concrete.app_user_provider', NULL, 'lexik_jwt_authentication.jwt_token_authenticator', NULL, NULL, [0 => 'guard', 1 => 'json_login', 2 => 'anonymous'], NULL);
    }
}
