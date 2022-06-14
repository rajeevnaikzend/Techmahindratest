<?php

namespace ContainerPe4ym1Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_El1h8jpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.el1h8jp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.el1h8jp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'guestBook' => ['privates', '.errored..service_locator.el1h8jp.App\\Entity\\Guest', NULL, 'Cannot autowire service ".service_locator.el1h8jp": it references class "App\\Entity\\Guest" but no such service exists.'],
        ], [
            'doctrine' => '?',
            'guestBook' => 'App\\Entity\\Guest',
        ]);
    }
}
