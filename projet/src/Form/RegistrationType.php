<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('avatar', FileType::class, [
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png' ,
                            'image/jpg',
                            'image/jpeg'
                        ],
                        'mimeTypesMessage' => 'Insérer une image valide (png,jpg,jpeg)',
                    ])
                ],
            ])
            ->add('username', TextType::class, array(
                'label' => 'Identifiant',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'identifiant doit faire au minimum 2 caractères']),
                ],
                'required' => true,
            ))
            ->add('email_recup', TextType::class, array(
                'label' => 'Email de récupération',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'email doit faire au minimum 2 caractères']),
                ],
                'required' => true,
            ))
            ->add('matricule')
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('password',PasswordType::class)
            ->add('email_perso', TextType::class, array(
                'label' => 'Email Personnel',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'email doit faire au minimum 2 caractères']),
                ],
                'required' => false,
            ))
            ->add('tel_perso', TextType::class, array(
                'label' => 'Téléphone Personnel',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
            ))
            ->add('tel_perso2', TextType::class, array(
                'label' => 'Téléphone Personnel secondaire',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
            ))
            ->add('email_pro', TextType::class, array(
                'label' => 'Email Professionnel',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'email doit faire au minimum 2 caractères']),
                ],
                'required' => false,
            ))
            ->add('tel_pro', TextType::class, array(
                'label' => 'Téléphone Professionnel',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
            ))
            ->add('tel_pro2', TextType::class, array(
                'label' => 'Téléphone Professionnel secondaire',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
            ))
            ->add('notification_perso', CheckboxType::class, [
                'label' => 'Notification Personnel',
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
            ])
            ->add('notification_pro', CheckboxType::class, [
                'label' => 'Notification Professionnel',
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
            ])
            ->add('droitEmprunt', CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
            ])
            ->add('droitAchat', CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
            ])
            ->add('ville', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'La ville doit faire au minimum 2 caractères']),
                ],
                'required' => false
            ))
            ->add('adresse_rue', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\' adresse de doit faire au minimum 2 caractères']),
                ],
                'required' => false
            ))
            ->add('adresse_rue_complement', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le complement doit faire au minimum 2 caractères']),
                ],
                'required' => false
            ))
            ->add('code_postal')
            ->add('entreprise')
            ->add('fonction')
            ->add('commentaire_utilisateur', TextareaType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le commentaire doit faire au minimum 2 caractères']),
                ],
                'required' => false
            ))
            ->add('commentaire_staff', TextareaType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le commentaire doit faire au minimum 2 caractères']),
                ],
                'required' => false
            ))
        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
