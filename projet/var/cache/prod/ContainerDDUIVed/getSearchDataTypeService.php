<?php

namespace ContainerDDUIVed;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchDataTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\SearchDataType' shared autowired service.
     *
     * @return \App\Form\SearchDataType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\SearchDataType'] = new \App\Form\SearchDataType();
    }
}