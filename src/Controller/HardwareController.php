<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class HardwareController extends AbstractController
{
    #[Route('/hardware', name: 'app_hardware')]
    public function index(Request $request): Response
    {
        $hardware = require $this->getParameter('kernel.project_dir') . '/data/hardware_data.php';

        return $this->render('hardware/index.html.twig', [
            'hardware' => $hardware,
        ]);
    }
}