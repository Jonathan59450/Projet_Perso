<?php

declare(strict_types=1); // Bonne pratique pour la rigueur des types

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'required' => false,
                'attr' => ['placeholder' => 'Votre prénom'],
                'constraints' => [
                    new Length(['max' => 50]),
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom de famille',
                'required' => false,
                'attr' => ['placeholder' => 'Votre nom de famille'],
                'constraints' => [
                    new Length(['max' => 50]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                // L'email ne devrait pas être modifiable si c'est l'identifiant unique, 
                'attr' => ['placeholder' => 'example@domaine.com'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir une adresse e-mail.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            // Protection CSRF activée
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
        ]);
    }
}
