<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeActionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypeActionRepository' shared autowired service.
     *
     * @return \App\Repository\TypeActionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeActionRepository'] = new \App\Repository\TypeActionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}