<?php
// src/Controller/CompteController.php

namespace App\Controller;

use App\Form\ProfilePictureType;
use App\Form\UserInfoType; // 👈 NOUVEL IMPORT
use App\Form\PasswordChangeType; // 👈 NOUVEL IMPORT
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface; 
use Symfony\Component\Filesystem\Filesystem; 

class CompteController extends AbstractController
{
    // ----------------------------------------------------
    // 1. PAGE PRINCIPALE DU COMPTE
    // ----------------------------------------------------
    #[Route('/mon-compte', name: 'app_account')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        // Affiche la vue d'accueil du compte
        return $this->render('compte/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    // ----------------------------------------------------
    // 2. MODIFICATION DE L'IMAGE DE PROFIL
    // ----------------------------------------------------
    #[Route('/mon-compte/photo', name: 'app_account_picture_edit')] 
    #[IsGranted('ROLE_USER')]
    public function pictureEdit(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $form = $this->createForm(ProfilePictureType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictureFile = $form->get('picture')->getData();

            if ($pictureFile) {
                $filesystem = new Filesystem();
                $oldFilename = $user->getProfilePicture(); 
                $newFilename = uniqid() . '.' . $pictureFile->guessExtension();
                $targetDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/profile';

                try {
                    $pictureFile->move($targetDirectory, $newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                    return $this->redirectToRoute('app_account_picture_edit');
                }

                // Mise à jour de l'entité
                $user->setProfilePicture($newFilename);
                $entityManager->flush();
                
                // Suppression de l'ancien fichier
                if ($oldFilename) {
                    $oldFilepath = $targetDirectory . '/' . $oldFilename;
                    if ($filesystem->exists($oldFilepath)) {
                        $filesystem->remove($oldFilepath);
                    }
                }
                
                $this->addFlash('success', 'Image de profil mise à jour !');
                return $this->redirectToRoute('app_account');
            }
        }

        // 🚀 CORRECTION : Utilise 'compte/profile_edit.html.twig'
        return $this->render('compte/profile_edit.html.twig', [
            'pictureForm' => $form->createView(),
            'user' => $user,
        ]);
    }
    
    // ----------------------------------------------------
    // 3. MODIFICATION DES INFORMATIONS PERSONNELLES
    // ----------------------------------------------------
    #[Route('/mon-compte/infos', name: 'app_account_info_edit')] 
    #[IsGranted('ROLE_USER')]
    public function infoEdit(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        $form = $this->createForm(UserInfoType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->flush();

            $this->addFlash('success', 'Vos informations ont été mises à jour !');
            return $this->redirectToRoute('app_account');
        }

        return $this->render('compte/info_edit.html.twig', [
            'infoForm' => $form->createView(),
        ]);
    }

    // ----------------------------------------------------
    // 4. MODIFICATION DU MOT DE PASSE
    // ----------------------------------------------------
    #[Route('/mon-compte/mot-de-passe', name: 'app_account_password_edit')] 
    #[IsGranted('ROLE_USER')]
    public function passwordEdit(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $form = $this->createForm(PasswordChangeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $oldPassword = $form->get('oldPassword')->getData();
            $newPassword = $form->get('newPassword')->getData();

            // 1. Vérification du mot de passe actuel
            if (!$passwordHasher->isPasswordValid($user, $oldPassword)) {
                $this->addFlash('error', 'Le mot de passe actuel est incorrect.');
                return $this->redirectToRoute('app_account_password_edit');
            }

            // 2. Hachage et mise à jour du nouveau mot de passe
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
            $entityManager->flush();

            $this->addFlash('success', 'Votre mot de passe a été mis à jour !');
            return $this->redirectToRoute('app_account');
        }

        return $this->render('compte/password_edit.html.twig', [
            'passwordForm' => $form->createView(),
        ]);
    }
}
