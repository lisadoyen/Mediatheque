<?php

namespace ContainerRtnnWV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HEwcf7AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hEwcf7A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hEwcf7A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.hEwcf7A.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.hEwcf7A": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'user' => 'App\\Entity\\User',
        ]);
    }
}
