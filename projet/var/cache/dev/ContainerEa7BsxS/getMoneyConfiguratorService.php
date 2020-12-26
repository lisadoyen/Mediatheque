<?php

namespace ContainerEa7BsxS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMoneyConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Contracts\\Field\\FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\MoneyConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Intl\\IntlFormatter.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\MoneyConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())), ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));
    }
}
