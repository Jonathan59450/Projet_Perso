<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    // C'est le contrôleur standard de Symfony pour la page de connexion
    #[Route(path: '/connexion', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, il doit être redirigé (vous pouvez l'ajuster)
        if ($this->getUser()) {
             return $this->redirectToRoute('app_home'); // Assurez-vous que 'app_home' existe
        }

        // Récupère l'erreur de connexion s'il y en a une (c'est la variable 'error' que le template attend)
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // Récupère le dernier nom d'utilisateur saisi par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('connexion/index.html.twig', [
            'last_username' => $lastUsername, // Passé au template pour pré-remplir le champ email
            'error' => $error,                 // Passé au template pour afficher le message d'erreur
        ]);
    }

    // Le contrôleur de déconnexion n'a besoin que d'une route, la logique est gérée par le firewall
    #[Route(path: '/deconnexion', name: 'app_logout')]
    public function logout(): void
    {
        // Cette méthode peut être vide, car elle sera interceptée par le firewall de Symfony.
        // Si vous atteignez cette méthode, quelque chose est mal configuré.
        throw new \LogicException('This method can be blank - it will be intercepted by the firewall.');
    }
}
