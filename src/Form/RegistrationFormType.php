<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            // Champ Email
            ->add('email', EmailType::class, [
                'attr' => ['autocomplete' => 'email'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre adresse e-mail.']),
                ],
            ])
            
            // Champ Nom d'utilisateur (Pseudo)
            ->add('username', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez choisir un nom d\'utilisateur.']),
                    new Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Votre pseudo doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Votre pseudo ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])

            // Checkbox d'acceptation des termes
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false, // Non mappé à l'entité User
                'label' => false, // Le label est géré dans le template Twig
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions d\'utilisation.',
                    ]),
                ],
            ])

            // Champ Mot de passe (avec répétition pour confirmation)
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false, // Non mappé directement à l'entité User (nous utilisons le Hacher)
                'first_options' => [
                    'attr' => ['autocomplete' => 'new-password'],
                    'label' => false, // Le label est géré dans le template Twig
                    'constraints' => [
                        new NotBlank(['message' => 'Veuillez entrer un mot de passe.']),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères.',
                            // max length allowed by Symfony for security reasons
                            'max' => 4096, 
                        ]),
                    ],
                ],
                'second_options' => [
                    'attr' => ['autocomplete' => 'new-password'],
                    'label' => false, // Le label est géré dans le template Twig
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            // Désactive la validation HTML5 du navigateur pour laisser Symfony gérer toute la validation
            'attr' => ['novalidate' => 'novalidate'] 
        ]);
    }
}
