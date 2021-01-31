<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MHBSyR7Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.mHBSyR7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mHBSyR7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entite' => ['privates', '.errored..service_locator.mHBSyR7.App\\Entity\\Entite', NULL, 'Cannot autowire service ".service_locator.mHBSyR7": it references class "App\\Entity\\Entite" but no such service exists.'],
        ], [
            'entite' => 'App\\Entity\\Entite',
        ]);
    }
}
