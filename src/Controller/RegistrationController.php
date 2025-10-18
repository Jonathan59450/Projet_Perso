<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
// N'oubliez pas d'inclure les autres use nécessaires si vous avez la logique de hachage de mot de passe et d'authentification.

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        // 1. Créer une nouvelle entité User
        $user = new User();
        
        // 2. Créer le formulaire
        // Assurez-vous que le nom de la variable ici (registrationForm) correspond à ce qui est utilisé dans le template Twig.
        $form = $this->createForm(RegistrationFormType::class, $user);
        
        // 3. Gérer la soumission du formulaire (cette partie est pour le traitement, pas seulement l'affichage)
        $form->handleRequest($request);

        // Cette partie gère la logique d'enregistrement après la soumission
        if ($form->isSubmitted() && $form->isValid()) {
            // Logique de hachage du mot de passe et enregistrement dans la BDD
            // ... (à compléter)

            // Exemple simple de persistance (sans hachage de mot de passe)
            // $entityManager->persist($user);
            // $entityManager->flush();

            // Redirection après succès
            // return $this->redirectToRoute('app_home');
        }

        // 4. Passer le formulaire à la vue
        return $this->render('registration/index.html.twig', [
            'registrationForm' => $form->createView(), // C'EST CETTE LIGNE QUI EST CRUCIALE !
        ]);
    }
}
