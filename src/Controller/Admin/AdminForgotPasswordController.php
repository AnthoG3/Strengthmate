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
// Route for displaying and handling the "forgot password" form
#[Route('/admin/forgot-password', name: 'admin_forgot_password')]
public function forgotPassword(Request $request, EntityManagerInterface $em, MailerInterface $mailer): Response
{
// Handle form submission
if ($request->isMethod('POST')) {
$email = $request->request->get('email');
$admin = $em->getRepository(Admin::class)->findOneBy(['email' => $email]);

// If the admin account exists for the provided email
if ($admin) {
// Generate a secure reset token and store it in the database
$token = bin2hex(random_bytes(32));
$admin->setResetToken($token);
$em->flush();

// Generate the reset password URL
$resetUrl = $this->generateUrl('admin_reset_password', ['token' => $token], 0);

// ✅ Send the reset email (production)
$emailMessage = (new Email())
->from('no-reply@tonsite.fr')
->to($email)
->subject('Password Reset')
->text("Click this link to reset your password: $resetUrl");

$mailer->send($emailMessage);

$this->addFlash('success', 'A reset link has been sent to your email address.');
} else {
$this->addFlash('error', 'Email not recognized.');
}

return $this->redirectToRoute('admin_forgot_password');
}

// Render the forgot password form
return $this->render('admin/admin_login/forgot_password.html.twig');
}

// Route for resetting the password using the token
#[Route('/admin/reset-password/{token}', name: 'admin_reset_password')]
public function resetPassword(string $token, Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
{
$admin = $em->getRepository(Admin::class)->findOneBy(['resetToken' => $token]);

// If the token is invalid or does not match any admin
if (!$admin) {
throw $this->createNotFoundException('Invalid token.');
}

// Handle password reset form submission
if ($request->isMethod('POST')) {
$newPassword = $request->request->get('password');
$hashed = $hasher->hashPassword($admin, $newPassword);
$admin->setPassword($hashed);
$admin->setResetToken(null); // Clear the token after use
$em->flush();

$this->addFlash('success', 'Password successfully updated.');
return $this->redirectToRoute('admin_login');
}

// Render the password reset form
return $this->render('admin/admin_login/reset_password.html.twig');
}
}
