<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gencode')
            ->add('codeArticle')
            ->add('titre')
            ->add('description')
            ->add('vignette')
            ->add('datePublication')
            ->add('montantObtention')
            ->add('montantCaution')
            ->add('montantVente')
            ->add('observation')
            ->add('numerique')
            ->add('categorie')
            ->add('trancheAge')
            ->add('statut')
            ->add('genre')
            ->add('rubriques')
            ->add('tags')
            ->add('entites')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
