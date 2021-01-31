<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFavorisRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FavorisRepository' shared autowired service.
     *
     * @return \App\Repository\FavorisRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FavorisRepository'] = new \App\Repository\FavorisRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
