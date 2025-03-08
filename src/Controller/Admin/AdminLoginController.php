<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminLoginController extends AbstractController
{
    #[Route('/admin/login', name: 'admin_login')]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Gestion des erreurs d'authentification
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername() ?? '';

        return $this->render('admin/admin_login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $request->getSession()->get('_csrf/admin_login') ?? '', // Récupère le token CSRF
        ]);
    }

    #[Route('/admin/logout', name: 'admin_logout', methods: ['GET'])]
    public function logout(): void
    {
        // Symfony intercepte cette route automatiquement pour gérer la déconnexion
        throw new \LogicException('Cette méthode peut rester vide. Symfony la gère automatiquement.');
    }
}
