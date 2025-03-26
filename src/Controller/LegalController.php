<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends AbstractController
{
    #[Route('/mentions-legales', name: 'app_mentions')]
    public function mentions(): Response
    {
        return $this->render('legal/mentions.html.twig');
    }

    #[Route('/conditions-utilisation', name: 'app_cgu')]
    public function cgu(): Response
    {
        return $this->render('legal/cgu.html.twig');
    }
}
