<?php

namespace ContainerXQToqcX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchBarControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SearchBar\SearchBarController' shared autowired service.
     *
     * @return \App\Controller\SearchBar\SearchBarController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SearchBar/SearchBarController.php';

        $container->services['App\\Controller\\SearchBar\\SearchBarController'] = $instance = new \App\Controller\SearchBar\SearchBarController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\SearchBar\\SearchBarController', $container));

        return $instance;
    }
}