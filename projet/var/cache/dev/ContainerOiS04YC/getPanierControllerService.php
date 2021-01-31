<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPanierControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PanierController' shared autowired service.
     *
     * @return \App\Controller\PanierController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PanierController.php';

        $container->services['App\\Controller\\PanierController'] = $instance = new \App\Controller\PanierController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PanierController', $container));

        return $instance;
    }
}
