<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SuivisController extends AbstractController
{
    #[Route('/suivis', name: 'app_suivis_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('suivis/index.html.twig', [
            'controller_name' => 'SuivisController',
        ]);
    }
}
