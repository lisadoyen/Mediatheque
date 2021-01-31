<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KkPDExGService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.kkPDExG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kkPDExG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trancheAge' => ['privates', '.errored..service_locator.kkPDExG.App\\Entity\\TrancheAge', NULL, 'Cannot autowire service ".service_locator.kkPDExG": it references class "App\\Entity\\TrancheAge" but no such service exists.'],
        ], [
            'trancheAge' => 'App\\Entity\\TrancheAge',
        ]);
    }
}
