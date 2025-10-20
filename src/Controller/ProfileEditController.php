<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileEditController extends AbstractController
{
    #[Route('/profile/edit', name: 'app_profile_edit')]
    public function index(): Response
    {
        return $this->render('profile_edit/index.html.twig', [
            'controller_name' => 'ProfileEditController',
        ]);
    }
}
