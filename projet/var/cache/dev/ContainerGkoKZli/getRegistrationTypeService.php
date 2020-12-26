<?php

namespace ContainerGkoKZli;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegistrationType' shared autowired service.
     *
     * @return \App\Form\RegistrationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RegistrationType.php';

        return $container->privates['App\\Form\\RegistrationType'] = new \App\Form\RegistrationType();
    }
}
