<?php

namespace ContainerRtnnWV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__PmkTlBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..PmkTlB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..PmkTlB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'genreRepository' => ['privates', 'App\\Repository\\GenreRepository', 'getGenreRepositoryService', true],
        ], [
            'genreRepository' => 'App\\Repository\\GenreRepository',
        ]);
    }
}