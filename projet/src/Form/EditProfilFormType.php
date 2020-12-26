<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;

class EditProfilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('avatar', FileType::class, [
                'label' => 'Avatar',
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
            ->add('email_perso')
            ->add('email_recup')
            ->add('tel_perso')
            ->add('tel_perso2')
            ->add('email_pro')
            ->add('tel_pro')
            ->add('tel_pro2')
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
            ->add('commentaire_utilisateur', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le commentaire doit faire au minimum 2 caractères']),
                ],
                'required' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
