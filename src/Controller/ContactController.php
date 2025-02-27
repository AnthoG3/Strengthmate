<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact_index', methods: ['GET', 'POST'])]
    public function index(Request $request, MailerInterface $mailer, LoggerInterface $logger): Response
    {
        $contact = new Contact();

        // Création du formulaire
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $logger->info('Formulaire soumis et valide. Envoi de l\'email en cours...');

            try {
                $email = (new Email())
                    ->from('contact@strength.fr')
                    ->to('anthony.gevers@lapiscine.pro')
                    ->subject('Nouvelle demande de contact')
                    ->html("<h2>Nouvelle demande de contact</h2>
                        <p><strong>Nom :</strong> {$contact->getName()}</p>
                        <p><strong>Email :</strong> {$contact->getEmail()}</p>
                        <p><strong>Téléphone :</strong> {$contact->getPhone()}</p>
                        <p><strong>Message :</strong><br>{$contact->getContent()}</p>");

                $mailer->send($email);
                $logger->info('Email envoyé avec succès.');

                $this->addFlash('success', 'Votre message a été envoyé avec succès.');
                return $this->redirectToRoute('app_contact_index');

            } catch (\Exception $e) {
                $logger->error('Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de votre message.');
                return $this->redirectToRoute('app_contact_index');
            }
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
