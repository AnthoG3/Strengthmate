<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    // Route for the homepage
    #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {
        // Render the home view with a controller name variable
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
