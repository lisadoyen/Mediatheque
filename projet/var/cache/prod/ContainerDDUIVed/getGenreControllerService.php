<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenreControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\GenreController' shared autowired service.
     *
     * @return \App\Controller\GenreController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\GenreController'] = $instance = new \App\Controller\GenreController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\GenreController', $container));

        return $instance;
    }
}