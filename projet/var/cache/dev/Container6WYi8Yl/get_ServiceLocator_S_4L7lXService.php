<?php

namespace Container6WYi8Yl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S_4L7lXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s.4L7lX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s.4L7lX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliotheque' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliothequeByType' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\Security\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\Security\\SecurityController::registration' => ['privates', '.service_locator.z0fEc8i', 'get_ServiceLocator_Z0fEc8iService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\Adherent\\MediathequeControllerAdherent:showBibliotheque' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\Adherent\\MediathequeControllerAdherent:showBibliothequeByType' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\Security\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\Security\\SecurityController:registration' => ['privates', '.service_locator.z0fEc8i', 'get_ServiceLocator_Z0fEc8iService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliotheque' => '?',
            'App\\Controller\\Adherent\\MediathequeControllerAdherent::showBibliothequeByType' => '?',
            'App\\Controller\\Security\\SecurityController::login' => '?',
            'App\\Controller\\Security\\SecurityController::registration' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Adherent\\MediathequeControllerAdherent:showBibliotheque' => '?',
            'App\\Controller\\Adherent\\MediathequeControllerAdherent:showBibliothequeByType' => '?',
            'App\\Controller\\Security\\SecurityController:login' => '?',
            'App\\Controller\\Security\\SecurityController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}