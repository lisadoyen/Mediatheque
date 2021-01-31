<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EiPaxt2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EiPaxt2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EiPaxt2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'genre' => ['privates', '.errored..service_locator.EiPaxt2.App\\Entity\\Genre', NULL, 'Cannot autowire service ".service_locator.EiPaxt2": it references class "App\\Entity\\Genre" but no such service exists.'],
            'rep' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
        ], [
            'genre' => 'App\\Entity\\Genre',
            'rep' => 'App\\Repository\\CategorieRepository',
        ]);
    }
}
