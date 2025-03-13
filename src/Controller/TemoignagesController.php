<?php

namespace App\Controller;

use App\Entity\Temoignages;
use App\Repository\TemoignagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemoignagesController extends AbstractController
{
    #[Route('/temoignages', name: 'app_temoignages_index', methods: ['GET'])]
    public function index(TemoignagesRepository $temoignagesRepository): Response
    {
        return $this->render('temoignages/index.html.twig', [
            'temoignages' => $temoignagesRepository->findBy([], ['id' => 'DESC']),
        ]);
    }
}
