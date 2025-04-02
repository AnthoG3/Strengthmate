<?php

namespace App\Controller;

use App\Repository\SuivisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SuivisController extends AbstractController
{
    // Route to display all "Suivis" entries
    #[Route('/suivis', name: 'app_suivis_index', methods: ['GET'])]
    public function index(SuivisRepository $suivisRepository): Response
    {
        // Retrieve all Suivis entities using the repository
        $suivis = $suivisRepository->findAll();

        // Render the view and pass the Suivis data to the template
        return $this->render('suivis/index.html.twig', [
            'suivis' => $suivis,
        ]);
    }
}
