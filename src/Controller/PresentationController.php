<?php

namespace App\Controller;

use App\Entity\Presentation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PresentationController extends AbstractController
{
    #[Route('/presentation', name: 'app_presentation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $presentations = $entityManager->getRepository(Presentation::class)->findAll();

        return $this->render('presentation/index.html.twig', [
            'presentations' => $presentations,
        ]);
    }
}
