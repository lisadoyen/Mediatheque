<?php

namespace ContainerRtnnWV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFonctionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FonctionController' shared autowired service.
     *
     * @return \App\Controller\FonctionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\FonctionController.php';

        $container->services['App\\Controller\\FonctionController'] = $instance = new \App\Controller\FonctionController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\FonctionController', $container));

        return $instance;
    }
}
