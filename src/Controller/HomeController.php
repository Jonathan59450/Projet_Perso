<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Vérifie si l'utilisateur est connecté
        if (!$this->getUser()) {
            // S'il n'est pas connecté, redirigez-le vers la page de connexion
            return $this->redirectToRoute('app_login');
        }

        // Si l'utilisateur est connecté, affiche une page de bienvenue simple
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
