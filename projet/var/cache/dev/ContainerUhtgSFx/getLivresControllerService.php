<?php

namespace ContainerUhtgSFx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivresControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Articles\LivresController' shared autowired service.
     *
     * @return \App\Controller\Articles\LivresController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\Articles\\LivresController.php';

        $container->services['App\\Controller\\Articles\\LivresController'] = $instance = new \App\Controller\Articles\LivresController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Articles\\LivresController', $container));

        return $instance;
    }
}
