<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        // 1. Création du formulaire et hydratation de l'entité User
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        // 2. Traitement du formulaire soumis
        if ($form->isSubmitted() && $form->isValid()) {
            
            // 3. Hachage du mot de passe (crucial pour la sécurité !)
            $plainPassword = $form->get('plainPassword')->getData();
            $hashedPassword = $userPasswordHasher->hashPassword(
                $user,
                $plainPassword
            );
            $user->setPassword($hashedPassword);
            
            // 4. Sauvegarde de l'utilisateur en base de données
            $entityManager->persist($user);
            $entityManager->flush();
            
            // 5. Message de succès et Redirection (vers la page de connexion)
            $this->addFlash('success', 'Votre compte a été créé avec succès ! Vous pouvez maintenant vous connecter.');
            
            // Redirige l'utilisateur vers la page de connexion
            return $this->redirectToRoute('app_login'); // Assurez-vous que 'app_login' est la bonne route
        }

        // 6. Rendu du template
        return $this->render('registration/index.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
