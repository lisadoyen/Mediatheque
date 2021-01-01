<?php

namespace App\Form;

use App\Entity\Avis;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('texte', CKEditorType::class, [
                    'label' => false,
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'saisir un commentaire'
                    ]
                ]
            );
            //->add('note')
            //->add('signale')
            //->add('article')
            //->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
