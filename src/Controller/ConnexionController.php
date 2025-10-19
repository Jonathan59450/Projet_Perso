<?php
// src/Controller/ConnexionController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils; // 👈 Nouvelle importation

class ConnexionController extends AbstractController
{
    #[Route(path: '/connexion', name: 'app_connexion')] // 👈 Nommez la route 'app_connexion'
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, le rediriger vers la page d'accueil
        if ($this->getUser()) {
             return $this->redirectToRoute('app_accueil');
        }

        // Récupérer l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // Récupérer le dernier nom d'utilisateur (email ou pseudo) entré par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('connexion/index.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    // ⚠️ IMPORTANT : Vous avez besoin d'une route pour la déconnexion
    // Cette fonction peut être laissée vide car Symfony intercepte cette route.
    #[Route(path: '/deconnexion', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode peut être vide - elle sera interceptée par le firewall de Symfony.');
    }
}