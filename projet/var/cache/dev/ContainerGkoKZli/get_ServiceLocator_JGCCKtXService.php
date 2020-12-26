<?php

namespace ContainerGkoKZli;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JGCCKtXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jGCCKtX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jGCCKtX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serializer' => ['services', 'serializer', 'getSerializerService', true],
        ], [
            'serializer' => '?',
        ]);
    }
}
