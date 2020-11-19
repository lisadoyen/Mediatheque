<?php

namespace ContainerRZnBzTU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenreControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GenreController' shared autowired service.
     *
     * @return \App\Controller\GenreController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\GenreController.php';

        $container->services['App\\Controller\\GenreController'] = $instance = new \App\Controller\GenreController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\GenreController', $container));

        return $instance;
    }
}
