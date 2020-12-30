<?php

namespace ContainerRtnnWV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntrepriseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EntrepriseController' shared autowired service.
     *
     * @return \App\Controller\EntrepriseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\EntrepriseController.php';

        $container->services['App\\Controller\\EntrepriseController'] = $instance = new \App\Controller\EntrepriseController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\EntrepriseController', $container));

        return $instance;
    }
}
