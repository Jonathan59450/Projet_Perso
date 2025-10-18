<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType; // <-- Ajout de l'import
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // 0. Champ Nom d'utilisateur (Username) <-- NOUVEAU
            ->add('username', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Choisissez votre Nom d\'utilisateur',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez choisir un nom d\'utilisateur',
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le nom d\'utilisateur doit comporter au moins {{ limit }} caractères',
                    ]),
                ],
            ])

            // 1. Champ Email
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Votre adresse email',
                ],
            ])
            
            // 2. Case à cocher pour les CGU
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions.',
                    ]),
                ],
                'label' => 'J\'accepte les Conditions Générales d\'Utilisation',
                'attr' => [
                    'class' => 'form-check-input me-2',
                ],
            ])
            
            // 3. Champs Mot de passe (RepeatedType pour la confirmation)
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'first_options' => [
                    'label' => false,
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Mot de passe (8 caractères minimum)',
                    ],
                ],
                'second_options' => [
                    'label' => false,
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Confirmer le mot de passe',
                    ],
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr' => [
                'novalidate' => 'novalidate' 
            ]
        ]);
    }
}
