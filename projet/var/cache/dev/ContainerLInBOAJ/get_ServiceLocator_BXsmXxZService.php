<?php

namespace ContainerLInBOAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BXsmXxZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BXsmXxZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BXsmXxZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trancheAgeRepository' => ['privates', 'App\\Repository\\TrancheAgeRepository', 'getTrancheAgeRepositoryService', true],
        ], [
            'trancheAgeRepository' => 'App\\Repository\\TrancheAgeRepository',
        ]);
    }
}
