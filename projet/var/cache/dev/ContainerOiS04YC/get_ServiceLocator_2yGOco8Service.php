<?php

namespace ContainerOiS04YC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2yGOco8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2yGOco8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2yGOco8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actionRepository' => ['privates', 'App\\Repository\\ActionRepository', 'getActionRepositoryService', true],
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'avisRepository' => ['privates', 'App\\Repository\\AvisRepository', 'getAvisRepositoryService', true],
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'favorisRepository' => ['privates', 'App\\Repository\\FavorisRepository', 'getFavorisRepositoryService', true],
            'new' => ['privates', 'App\\Service\\Article\\Nouveaute', 'getNouveauteService', true],
            'user' => ['privates', '.errored..service_locator.2yGOco8.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.2yGOco8": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'actionRepository' => 'App\\Repository\\ActionRepository',
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'avisRepository' => 'App\\Repository\\AvisRepository',
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'favorisRepository' => 'App\\Repository\\FavorisRepository',
            'new' => 'App\\Service\\Article\\Nouveaute',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
