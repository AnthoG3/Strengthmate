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
                    ->html(
                        '<html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #151515;
                        color: #f5c827;
                        margin: 0;
                        padding: 0;
                        height: 100vh;
                        width: 100vw;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    .email-wrapper {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                    }
                    .email-container {
                        max-width: 600px;
                        width: 100%;
                        background-color: #151515;
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgb(245,200,39);
                        text-align: center;
                    }
                    h2 {
                        color: #f5c827;
                        text-align: center;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 20px;
                    }
                    td {
                        padding: 10px;
                        border-bottom: 1px solid #ddd;
                        text-align: left;
                    }
                    .label {
                        font-weight: bold;
                        color: #f5c827;
                    }
                </style>
            </head>
            <body>
                <div class="email-wrapper">
                    <div class="email-container">
                        <h2>Nouveau message de contact</h2>
                        <table>
                            <tr>
                                <td class="label">Nom :</td>
                                <td>' . htmlspecialchars($contact->getName()) . '</td>
                            </tr>
                            <tr>
                                <td class="label">Email :</td>
                                <td>' . htmlspecialchars($contact->getEmail()) . '</td>
                            </tr>
                            <tr>
                                <td class="label">Téléphone :</td>
                                <td>' . htmlspecialchars($contact->getPhone()) . '</td>
                            </tr>
                            <tr>
                                <td class="label">Message :</td>
                                <td>' . nl2br(htmlspecialchars($contact->getContent())) . '</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </body>
        </html>'

            );

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
