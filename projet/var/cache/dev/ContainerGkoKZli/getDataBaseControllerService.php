<?php

namespace ContainerGkoKZli;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataBaseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DataBaseController' shared autowired service.
     *
     * @return \App\Controller\DataBaseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DataBaseController.php';

        $container->services['App\\Controller\\DataBaseController'] = $instance = new \App\Controller\DataBaseController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\DataBaseController', $container));

        return $instance;
    }
}
