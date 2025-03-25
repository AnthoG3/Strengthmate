<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SecurityBundle\Security;

class AdminLoginController extends AbstractController
{
    #[Route('/admin/login', name: 'admin_login')]
    public function login(AuthenticationUtils $authenticationUtils, Request $request, Security $security): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Récupérer la dernière erreur d'authentification s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        // Vérifier si l'utilisateur vient de se connecter avec succès
        if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
            $this->addFlash('success', 'Connexion réussie !');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Ajouter un message flash en cas d'erreur d'authentification
        if ($error) {
            $this->addFlash('error', 'Identifiants invalides. Veuillez vérifier votre email et mot de passe.');
        }

        return $this->render('admin/admin_login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/admin/logout', name: 'admin_logout', methods: ['GET'])]
    public function logout(): void
    {
        // Cette méthode peut rester vide car Symfony gère automatiquement la déconnexion
        throw new \LogicException('Cette méthode peut rester vide. Symfony la gère automatiquement.');
    }
}
