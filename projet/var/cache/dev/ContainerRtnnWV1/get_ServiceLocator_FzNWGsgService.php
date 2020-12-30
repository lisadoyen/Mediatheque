<?php

namespace ContainerRtnnWV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FzNWGsgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fzNWGsg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fzNWGsg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonce' => ['privates', '.errored..service_locator.fzNWGsg.App\\Entity\\Annonce', NULL, 'Cannot autowire service ".service_locator.fzNWGsg": it references class "App\\Entity\\Annonce" but no such service exists.'],
        ], [
            'annonce' => 'App\\Entity\\Annonce',
        ]);
    }
}
