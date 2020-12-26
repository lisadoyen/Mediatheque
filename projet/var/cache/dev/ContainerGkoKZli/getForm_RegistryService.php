<?php

namespace ContainerGkoKZli;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AnnonceType' => ['privates', 'App\\Form\\AnnonceType', 'getAnnonceTypeService', true],
            'App\\Form\\AuteurType' => ['privates', 'App\\Form\\AuteurType', 'getAuteurTypeService', true],
            'App\\Form\\BibliothequeType' => ['privates', 'App\\Form\\BibliothequeType', 'getBibliothequeTypeService', true],
            'App\\Form\\CategorieType' => ['privates', 'App\\Form\\CategorieType', 'getCategorieTypeService', true],
            'App\\Form\\EditProfilFormType' => ['privates', 'App\\Form\\EditProfilFormType', 'getEditProfilFormTypeService', true],
            'App\\Form\\EntiteType' => ['privates', 'App\\Form\\EntiteType', 'getEntiteTypeService', true],
            'App\\Form\\EntrepriseType' => ['privates', 'App\\Form\\EntrepriseType', 'getEntrepriseTypeService', true],
            'App\\Form\\FonctionType' => ['privates', 'App\\Form\\FonctionType', 'getFonctionTypeService', true],
            'App\\Form\\GenreType' => ['privates', 'App\\Form\\GenreType', 'getGenreTypeService', true],
            'App\\Form\\LienType' => ['privates', 'App\\Form\\LienType', 'getLienTypeService', true],
            'App\\Form\\RegistrationType' => ['privates', 'App\\Form\\RegistrationType', 'getRegistrationTypeService', true],
            'App\\Form\\RubriqueType' => ['privates', 'App\\Form\\RubriqueType', 'getRubriqueTypeService', true],
            'App\\Form\\SearchDataType' => ['privates', 'App\\Form\\SearchDataType', 'getSearchDataTypeService', true],
            'App\\Form\\TagType' => ['privates', 'App\\Form\\TagType', 'getTagTypeService', true],
            'App\\Form\\TrancheAgeType' => ['privates', 'App\\Form\\TrancheAgeType', 'getTrancheAgeTypeService', true],
            'App\\Form\\TypeEntiteType' => ['privates', 'App\\Form\\TypeEntiteType', 'getTypeEntiteTypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 'getCrudFormTypeService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 'getFiltersFormTypeService', true],
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => ['privates', 'fos_ck_editor.form.type', 'getFosCkEditor_Form_TypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\AnnonceType' => '?',
            'App\\Form\\AuteurType' => '?',
            'App\\Form\\BibliothequeType' => '?',
            'App\\Form\\CategorieType' => '?',
            'App\\Form\\EditProfilFormType' => '?',
            'App\\Form\\EntiteType' => '?',
            'App\\Form\\EntrepriseType' => '?',
            'App\\Form\\FonctionType' => '?',
            'App\\Form\\GenreType' => '?',
            'App\\Form\\LienType' => '?',
            'App\\Form\\RegistrationType' => '?',
            'App\\Form\\RubriqueType' => '?',
            'App\\Form\\SearchDataType' => '?',
            'App\\Form\\TagType' => '?',
            'App\\Form\\TrancheAgeType' => '?',
            'App\\Form\\TypeEntiteType' => '?',
            'App\\Form\\UserType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => '?',
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] ?? $container->load('getEaCrudFormTypeExtensionService'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
