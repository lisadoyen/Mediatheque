<?php

namespace ContainerNo9DrGN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRubriqueTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RubriqueType' shared autowired service.
     *
     * @return \App\Form\RubriqueType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\RubriqueType.php';

        return $container->privates['App\\Form\\RubriqueType'] = new \App\Form\RubriqueType();
    }
}
