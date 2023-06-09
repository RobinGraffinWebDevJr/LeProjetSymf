<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Bienvenue ici la matrice!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}
