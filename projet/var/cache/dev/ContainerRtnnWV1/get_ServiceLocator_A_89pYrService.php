<?php

namespace ContainerRtnnWV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A_89pYrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a.89pYr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a.89pYr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'enregistrementRepository' => ['privates', 'App\\Repository\\EnregistrementRepository', 'getEnregistrementRepositoryService', true],
            'entiteRepository' => ['privates', 'App\\Repository\\EntiteRepository', 'getEntiteRepositoryService', true],
            'genreRepository' => ['privates', 'App\\Repository\\GenreRepository', 'getGenreRepositoryService', true],
            'statutEnregistrementRepository' => ['privates', 'App\\Repository\\StatutEnregistrementRepository', 'getStatutEnregistrementRepositoryService', true],
            'statutRepository' => ['privates', 'App\\Repository\\StatutRepository', 'getStatutRepositoryService', true],
            'trancheAgeRepository' => ['privates', 'App\\Repository\\TrancheAgeRepository', 'getTrancheAgeRepositoryService', true],
            'typeActionRepository' => ['privates', 'App\\Repository\\TypeActionRepository', 'getTypeActionRepositoryService', true],
            'typeEnregistrementRepository' => ['privates', 'App\\Repository\\TypeEnregistrementRepository', 'getTypeEnregistrementRepositoryService', true],
            'typeEntiteRepository' => ['privates', 'App\\Repository\\TypeEntiteRepository', 'getTypeEntiteRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'videoldRepository' => ['privates', 'App\\Repository\\VideoldRepository', 'getVideoldRepositoryService', true],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'em' => '?',
            'enregistrementRepository' => 'App\\Repository\\EnregistrementRepository',
            'entiteRepository' => 'App\\Repository\\EntiteRepository',
            'genreRepository' => 'App\\Repository\\GenreRepository',
            'statutEnregistrementRepository' => 'App\\Repository\\StatutEnregistrementRepository',
            'statutRepository' => 'App\\Repository\\StatutRepository',
            'trancheAgeRepository' => 'App\\Repository\\TrancheAgeRepository',
            'typeActionRepository' => 'App\\Repository\\TypeActionRepository',
            'typeEnregistrementRepository' => 'App\\Repository\\TypeEnregistrementRepository',
            'typeEntiteRepository' => 'App\\Repository\\TypeEntiteRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
            'videoldRepository' => 'App\\Repository\\VideoldRepository',
        ]);
    }
}
