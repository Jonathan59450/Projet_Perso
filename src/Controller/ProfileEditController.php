<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\UserInfoType; // Utilise la classe réelle
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Exception; // Importation pour la gestion des erreurs

#[IsGranted('ROLE_USER')] // Sécurise tout le contrôleur
final class ProfileEditController extends AbstractController
{
    // C'est la route 'app_profile_edit' que nous utilisons
    #[Route('/profil/modifier', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        try {
            // Création du formulaire. C'est le point de défaillance habituel.
            $form = $this->createForm(UserInfoType::class, $user);
        } catch (Exception $e) {
            // Si une erreur se produit ici (problème dans UserInfoType, Entité, etc.),
            // on affiche un message d'erreur et on redirige pour éviter l'erreur Twig.
            $this->addFlash('error', 'Erreur lors du chargement du formulaire de profil : ' . $e->getMessage());
            // Vous devriez voir cette erreur si le formulaire plante.
            return $this->redirectToRoute('app_accueil'); 
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->flush();

            $this->addFlash('success', 'Vos informations de profil ont été mises à jour avec succès.');

            return $this->redirectToRoute('app_profile_edit');
        }

        // Rendre le bon template basé sur votre structure
        return $this->render('compte/info_edit.html.twig', [
            'profileForm' => $form->createView(), // DEFINITION DE LA VARIABLE ICI
            'user' => $user,
        ]);
    }
}
