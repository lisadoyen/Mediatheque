<?php

namespace ContainerEa7BsxS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UuZjYyuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UuZjYyu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UuZjYyu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rubrique' => ['privates', '.errored..service_locator.UuZjYyu.App\\Entity\\Rubrique', NULL, 'Cannot autowire service ".service_locator.UuZjYyu": it references class "App\\Entity\\Rubrique" but no such service exists.'],
        ], [
            'rubrique' => 'App\\Entity\\Rubrique',
        ]);
    }
}
