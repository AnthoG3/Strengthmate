<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends AbstractController
{
    // Route for the Legal Notice page
    #[Route('/mentions-legales', name: 'app_mentions')]
    public function mentions(): Response
    {
        // Render the legal mentions (disclaimer) template
        return $this->render('legal/mentions.html.twig');
    }

    // Route for the Terms of Use page
    #[Route('/conditions-utilisation', name: 'app_cgu')]
    public function cgu(): Response
    {
        // Render the terms of use template
        return $this->render('legal/cgu.html.twig');
    }
}
