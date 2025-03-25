<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminForgotPasswordController extends AbstractController
{
    #[Route('/admin/forgot-password', name: 'admin_forgot_password')]
    public function forgotPassword(Request $request, EntityManagerInterface $em, MailerInterface $mailer): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $admin = $em->getRepository(Admin::class)->findOneBy(['email' => $email]);

            if ($admin) {
                $token = bin2hex(random_bytes(32));
                $admin->setResetToken($token);
                $em->flush();

                $resetUrl = $this->generateUrl('admin_reset_password', ['token' => $token], 0);

                // ✅ Pour tester sans envoyer d'email (temporairement) :
                 dd($resetUrl);

                // ✅ Envoi de l'email (prod)
                $emailMessage = (new Email())
                    ->from('no-reply@tonsite.fr')
                    ->to($email)
                    ->subject('Réinitialisation de mot de passe')
                    ->text("Cliquez sur ce lien pour réinitialiser votre mot de passe : $resetUrl");

                $mailer->send($emailMessage);
                $this->addFlash('success', 'Un lien de réinitialisation a été envoyé à votre adresse email.');
            } else {
                $this->addFlash('error', 'Email non reconnu.');
            }

            return $this->redirectToRoute('admin_forgot_password');
        }

        return $this->render('admin/admin_login/forgot_password.html.twig');
    }

    #[Route('/admin/reset-password/{token}', name: 'admin_reset_password')]
    public function resetPassword(string $token, Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
    {
        $admin = $em->getRepository(Admin::class)->findOneBy(['resetToken' => $token]);

        if (!$admin) {
            throw $this->createNotFoundException('Token invalide.');
        }

        if ($request->isMethod('POST')) {
            $newPassword = $request->request->get('password');
            $hashed = $hasher->hashPassword($admin, $newPassword);
            $admin->setPassword($hashed);
            $admin->setResetToken(null);
            $em->flush();

            $this->addFlash('success', 'Mot de passe modifié avec succès.');
            return $this->redirectToRoute('admin_login');
        }

        return $this->render('admin/admin_login/reset_password.html.twig');
    }
}
