<?php

namespace ContainerMIvxnoi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditProfilFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EditProfilFormType' shared autowired service.
     *
     * @return \App\Form\EditProfilFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EditProfilFormType.php';

        return $container->privates['App\\Form\\EditProfilFormType'] = new \App\Form\EditProfilFormType();
    }
}
