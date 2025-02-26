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
        // Création d'un nouvel objet Contact
        $contact = new Contact();

        // Création du formulaire basé sur l'entité Contact
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $logger->info('Formulaire soumis et valide. Envoi de l\'email en cours...');

            try {
                // Création de l'email à envoyer
                $email = (new Email())
                    ->from('contact@strength.fr')
                    ->to('anthony.gevers@lapiscine.pro')
                    ->subject('Hey ! Tu as une nouvelle demande de contact')
                    ->text(
                        "Nom : {$contact->getName()}\n" .
                        "Email : {$contact->getEmail()}\n" .
                        "Téléphone : {$contact->getPhone()}\n" .
                        "Message : {$contact->getMessage()}"
                    );

                // Envoi de l'email via le service Mailer
                $mailer->send($email);
                $logger->info('Email envoyé avec succès.');

                // Message flash pour indiquer le succès de l'envoi
                $this->addFlash('success', 'Votre message a été envoyé avec succès.');

                // Redirection vers la page d'accueil
                return $this->redirectToRoute('home');

            } catch (\Exception $e) {
                $logger->error('Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de votre message.');
            }
        } else {
            $logger->info('Le formulaire n\'a pas été soumis ou est invalide.');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
