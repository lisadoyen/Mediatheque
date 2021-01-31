<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F8XCVeqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F8XCVeq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F8XCVeq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'eventDispatcher' => '?',
            'session' => '?',
        ]);
    }
}
