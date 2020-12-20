<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EditProfilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('avatar')
            ->add('username')
            ->add('prenom')
            ->add('nom')
            ->add('email_perso')
            ->add('email_pro')
            ->add('email_recup')
            ->add('tel_perso')
            ->add('tel_perso2')
            ->add('tel_pro')
            ->add('tel_pro2')
            ->add('ville')
            ->add('adresse_rue')
            ->add('adresse_rue_complement')
            ->add('code_postal')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
