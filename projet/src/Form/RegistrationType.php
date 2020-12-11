<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('username')
            ->add('emailPerso')
            ->add('password')
            ->add('telPerso')
            ->add('matricule')
            ->add('sexe')
            ->add('avatar')
            ->add('telPerso2')
            ->add('notificationPerso')
            ->add('telPro')
            ->add('telPro2')
            ->add('emailPro')
            ->add('notificationPro')
            ->add('emailRecup')
            ->add('adresseRue')
            ->add('adresseRueComplement')
            ->add('ville')
            ->add('codePostal')
            ->add('droitEmprunt')
            ->add('droitAchat')
            ->add('commentaireUtilisateur')
            ->add('commentaireStaff')
            ->add('dateCreation')
            ->add('dateModification')
            ->add('entreprise')
            ->add('fonction')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
