<?php
// src/Controller/LegalController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LegalController extends AbstractController
{
    #[Route('/conditions-utilisation', name: 'app_cgu')] // Route pour les Conditions
    public function cgu(): Response
    {
        return $this->render('legal/cgu.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }

    // Vous pouvez ajouter d'autres pages légales ici :
    /*
    #[Route('/mentions-legales', name: 'app_mentions_legales')]
    public function mentionsLegales(): Response
    {
        return $this->render('legal/mentions_legales.html.twig');
    }
    */
}