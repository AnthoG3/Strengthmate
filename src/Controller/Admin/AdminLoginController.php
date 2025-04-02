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
    // Route for displaying the login page and handling authentication errors
    #[Route('/admin/login', name: 'admin_login')]
    public function login(AuthenticationUtils $authenticationUtils, Request $request, Security $security): Response
    {
        // If the user is already logged in, redirect to the admin dashboard
        if ($this->getUser()) {
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Get the last authentication error, if there was one
        $error = $authenticationUtils->getLastAuthenticationError();

        // Get the last entered username (email)
        $lastUsername = $authenticationUtils->getLastUsername();

        // Check if the user has just successfully logged in
        if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
            $this->addFlash('success', 'Successfully logged in!');
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // If there was an authentication error, show a flash message
        if ($error) {
            $this->addFlash('error', 'Invalid credentials. Please check your email and password.');
        }

        // Render the login form with the last entered username and error (if any)
        return $this->render('admin/admin_login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    // Route for handling logout (managed by Symfony firewall)
    #[Route('/admin/logout', name: 'admin_logout', methods: ['GET'])]
    public function logout(): void
    {
        // This method is never called directly — Symfony handles the logout automatically
        throw new \LogicException('This method can remain empty. Symfony handles the logout process automatically.');
    }
}
