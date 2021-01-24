<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Genre;
use App\Entity\Statut;
use App\Entity\TrancheAge;
use App\Repository\TrancheAgeRepository;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gencode', TextType::class, ['required' => true])
            ->add('codeArticle', TextType::class, ['required' => true])
            ->add('titre', TextType::class, ['required' => true])
            ->add('description', CKEditorType::class, ['required' => true])
            ->add('vignette', TextType::class, ['required' => false])
            ->add('datePublication', DateType::class, [
                'placeholder' => ['year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'],
                'years' => range(date('Y'), date('Y') - 100, -1),
                'required' => false
            ])
            ->add('montantObtention', NumberType::class, ['required' => true, 'label' => 'Montant d\'achat'])
            ->add('montantCaution', NumberType::class, ['required' => true, 'label' => 'Montant de caution'])
            ->add('montantVente', NumberType::class, ['required' => true, 'label' => 'Montant de vente par défaut'])
            ->add('observation', TextType::class, ['required' => false])
            ->add('numerique')
            ->add('categorie', EntityType::class, ['class' => Categorie::class, 'required' => true])
            ->add('trancheAge', EntityType::class, ['class' => TrancheAge::class, 'required' => true])
            ->add('statut', EntityType::class, ['class' => Statut::class, 'required' => true])
            ->add('genre', EntityType::class, ['class' => Genre::class, 'required' => true])
            ->add('rubriques')
            ->add('tags')
            ->add('entites', CollectionType::class, [
                'entry_type' => EntiteType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'label' => 'Entités associées'
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
