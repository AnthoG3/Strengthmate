<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TemoignagesController extends AbstractController
{
    #[Route('/temoignages', name: 'app_temoignages_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('temoignages/index.html.twig', [
            'controller_name' => 'TemoignagesController',
        ]);
    }
}
