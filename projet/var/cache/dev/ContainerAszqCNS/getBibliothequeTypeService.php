<?php

namespace ContainerAszqCNS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBibliothequeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\BibliothequeType' shared autowired service.
     *
     * @return \App\Form\BibliothequeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\BibliothequeType.php';

        return $container->privates['App\\Form\\BibliothequeType'] = new \App\Form\BibliothequeType();
    }
}
