<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Users\UserController' shared autowired service.
     *
     * @return \App\Controller\Users\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Users\\UserController'] = $instance = new \App\Controller\Users\UserController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Users\\UserController', $container));

        return $instance;
    }
}
