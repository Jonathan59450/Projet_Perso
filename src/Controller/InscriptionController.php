<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
// Importation nécessaire pour gérer les erreurs de base de données courantes
use Doctrine\DBAL\Exception\UniqueConstraintViolationException; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $userPasswordHasher, 
        EntityManagerInterface $entityManager
    ): Response {
        // Crée une nouvelle instance de l'entité User pour lier les données du formulaire
        $user = new User();
        
        // Crée le formulaire en se basant sur RegistrationFormType
        $form = $this->createForm(RegistrationFormType::class, $user);
        
        // Gère la requête (soumission du formulaire)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Hache le mot de passe avant de l'enregistrer en base de données
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            
            // Définit le rôle par défaut pour le nouvel utilisateur
            $user->setRoles(['ROLE_USER']);
            
            
            // AJOUT DU BLOC TRY...CATCH POUR ÉVITER LE CRASH 502/TCP
            try {
                // Persiste l'utilisateur en base de données
                $entityManager->persist($user);
                $entityManager->flush();
                
                // Modification de la redirection : vers la page d'accueil ('app_home')
                $this->addFlash('success', 'Votre compte a été créé avec succès ! Veuillez vous connecter pour commencer.');
                
                // 🚀 REDIRECTION VERS LA PAGE D'ACCUEIL APRÈS SUCCÈS 🚀
                return $this->redirectToRoute('app_accueil'); // <-- CORRIGÉ POUR REDIRIGER VERS L'ACCUEIL

            } catch (UniqueConstraintViolationException $e) {
                // Gère l'erreur spécifique si l'email ou le username existe déjà
                $this->addFlash('error', 'L\'adresse e-mail ou le nom d\'utilisateur est déjà utilisé. Veuillez en choisir un autre.');
                
                // On revient à la page d'inscription pour réafficher le formulaire
                return $this->redirectToRoute('app_inscription');

            } catch (\Exception $e) {
                // Gère toute autre erreur inattendue (colonne manquante, problème de connexion, etc.)
                $this->addFlash('error', 'Une erreur inattendue est survenue lors de l\'enregistrement. Détails pour le développeur : ' . $e->getMessage());
                return $this->redirectToRoute('app_inscription');
            }
        }

        // Affiche le template, en lui passant la vue du formulaire
        return $this->render('inscription/index.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    // ⛔ LA MÉTHODE CONNEXION EST SUPPRIMÉE ICI, CAR ELLE EST MAINTENANT DANS SecurityController ⛔
}
