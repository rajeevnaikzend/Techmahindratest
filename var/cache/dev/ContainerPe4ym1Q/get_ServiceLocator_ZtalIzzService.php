<?php

namespace ContainerPe4ym1Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZtalIzzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZtalIzz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZtalIzz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\GuestbookController::create' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\GuestbookController::index' => ['privates', '.service_locator.6jJVVYa', 'get_ServiceLocator_6jJVVYaService', true],
            'App\\Controller\\GuestbookController::remove' => ['privates', '.service_locator.el1h8jp', 'get_ServiceLocator_El1h8jpService', true],
            'App\\Controller\\GuestbookController::show' => ['privates', '.service_locator.7BiKyEG', 'get_ServiceLocator_7BiKyEGService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.c7Fj6Pu', 'get_ServiceLocator_C7Fj6PuService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\GuestbookController:create' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\GuestbookController:index' => ['privates', '.service_locator.6jJVVYa', 'get_ServiceLocator_6jJVVYaService', true],
            'App\\Controller\\GuestbookController:remove' => ['privates', '.service_locator.el1h8jp', 'get_ServiceLocator_El1h8jpService', true],
            'App\\Controller\\GuestbookController:show' => ['privates', '.service_locator.7BiKyEG', 'get_ServiceLocator_7BiKyEGService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.c7Fj6Pu', 'get_ServiceLocator_C7Fj6PuService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\GuestbookController::create' => '?',
            'App\\Controller\\GuestbookController::index' => '?',
            'App\\Controller\\GuestbookController::remove' => '?',
            'App\\Controller\\GuestbookController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\GuestbookController:create' => '?',
            'App\\Controller\\GuestbookController:index' => '?',
            'App\\Controller\\GuestbookController:remove' => '?',
            'App\\Controller\\GuestbookController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
