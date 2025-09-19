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
        // Charge les données depuis le fichier 'hardware_data.php' dans le dossier 'data'
        $hardwareData = require $this->getParameter('kernel.project_dir') . '/data/hardware_data.php';

        $gpus = $hardwareData['gpus'];
        $cpus = $hardwareData['cpus'];

        $searchTerm = $request->query->get('q');
        
        $filteredGpus = [];
        $filteredCpus = [];
        
        if ($searchTerm) {
            foreach ($gpus as $gpu) {
                if (stripos($gpu['name'], $searchTerm) !== false || stripos($gpu['description'], $searchTerm) !== false) {
                    $filteredGpus[] = $gpu;
                }
            }
        
            foreach ($cpus as $cpu) {
                if (stripos($cpu['name'], $searchTerm) !== false || stripos($cpu['description'], $searchTerm) !== false) {
                    $filteredCpus[] = $cpu;
                }
            }
        } else {
            $filteredGpus = $gpus;
            $filteredCpus = $cpus;
        }

        return $this->render('hardware/index.html.twig', [
            'gpus' => $filteredGpus,
            'cpus' => $filteredCpus,
            'searchTerm' => $searchTerm
        ]);
    }
}