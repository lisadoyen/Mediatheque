<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Rubrique;
use App\Repository\CategorieRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RubriqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('categories', EntityType::class, [
                'class' => Categorie::class,
                'query_builder' => function (CategorieRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.libelle', 'ASC');
                },
                'multiple' => true,
                'expanded' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Rubrique::class,
        ]);
    }
}
