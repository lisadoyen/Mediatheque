<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFonctionControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\FonctionController' shared autowired service.
     *
     * @return \App\Controller\FonctionController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FonctionController'] = $instance = new \App\Controller\FonctionController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\FonctionController', $container));

        return $instance;
    }
}