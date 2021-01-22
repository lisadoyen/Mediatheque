<?php

namespace App\Form;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gencode', TextType::class, ['required' => true])
            ->add('codeArticle')
            ->add('titre')
            ->add('description', CKEditorType::class)
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
            ->add('entites', CollectionType::class, [
                'entry_type' => EntiteType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
