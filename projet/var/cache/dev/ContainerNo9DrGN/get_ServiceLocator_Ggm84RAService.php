<?php

namespace ContainerNo9DrGN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ggm84RAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ggm84RA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ggm84RA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entreprise' => ['privates', '.errored..service_locator.ggm84RA.App\\Entity\\Entreprise', NULL, 'Cannot autowire service ".service_locator.ggm84RA": it references class "App\\Entity\\Entreprise" but no such service exists.'],
        ], [
            'entreprise' => 'App\\Entity\\Entreprise',
        ]);
    }
}
