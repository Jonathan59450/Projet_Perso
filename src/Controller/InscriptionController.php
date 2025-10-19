<?php
// src/Controller/InscriptionController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request; // 👈 Nouvelle importation

class InscriptionController extends AbstractController
{
    // La route pour accéder à la page d'inscription
    #[Route('/inscription', name: 'app_inscription')]
    public function register(Request $request): Response
    {
        // ⚠️ La logique du formulaire d'inscription Symfony (création du UserType, gestion de la soumission, Hachage du mot de passe...) irait ici.

        return $this->render('inscription/index.html.twig', [
            // Pour l'instant, on ne passe pas de formulaire
            // 'registrationForm' => $form->createView(), 
        ]);
    }
}