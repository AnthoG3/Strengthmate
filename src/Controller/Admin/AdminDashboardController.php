<?php

namespace App\Controller\Admin;

use App\Entity\Presentation;
use App\Entity\Suivis;
use App\Entity\Temoignages;
use App\Form\PresentationType;
use App\Form\SuivisType;
use App\Form\TemoignagesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    private const ENTITY_MAP = [
        'presentation' => [Presentation::class, PresentationType::class],
        'suivis' => [Suivis::class, SuivisType::class],
        'temoignages' => [Temoignages::class, TemoignagesType::class]
    ];

    #[Route('', name: 'app_admin_dashboard')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        return $this->render('admin/admin_dashboard/index.html.twig', [
            'presentations' => $entityManager->getRepository(Presentation::class)->findAll(),
            'suivis' => $entityManager->getRepository(Suivis::class)->findAll(),
            'temoignages' => $entityManager->getRepository(Temoignages::class)->findAll(),
        ]);
    }

    #[Route('/{entityType}/create', name: 'app_admin_entity_create', methods: ['GET', 'POST'])]
    public function createEntity(string $entityType, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, $formClass] = self::ENTITY_MAP[$entityType];
        $entity = new $entityClass();
        $form = $this->createForm($formClass, $entity);

        // Gérer la requête HTTP et remplir le formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                // Persister l'entité si le formulaire est valide
                $entityManager->persist($entity);
                $entityManager->flush();

                // Ajouter un message flash et rediriger
                $this->addFlash('success', ucfirst($entityType) . " ajouté avec succès.");
                return $this->redirectToRoute('app_admin_dashboard');
            } else {
                // Ajouter des messages flash pour chaque erreur
                foreach ($form->getErrors(true) as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            }
        }

        return $this->render('admin/admin_dashboard/create.html.twig', [
            'form' => $form->createView(),
            'entity_type' => $entityType,
        ]);
    }

    #[Route('/{entityType}/{id}', name: 'app_admin_entity_show', methods: ['GET'])]
    public function showEntity(string $entityType, int $id, EntityManagerInterface $entityManager): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, ] = self::ENTITY_MAP[$entityType];
        $entity = $entityManager->getRepository($entityClass)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException("Entité non trouvée.");
        }

        return $this->render('admin/admin_dashboard/show.html.twig', [
            'entity_type' => $entityType,
            'entity' => $entity,
        ]);
    }

    #[Route('/{entityType}/{id}/edit', name: 'app_admin_entity_edit', methods: ['GET', 'POST'])]
    public function editEntity(string $entityType, int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, $formClass] = self::ENTITY_MAP[$entityType];
        $entity = $entityManager->getRepository($entityClass)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException("Entité non trouvée.");
        }

        // Créer et gérer le formulaire pour l'édition
        $form = $this->createForm($formClass, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                // Ajouter des messages flash pour chaque erreur
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour l'entité et sauvegarder dans la base de données
            $entityManager->flush();

            // Ajouter un message flash et rediriger vers la page de détail
            $this->addFlash('success', ucfirst($entityType) . " mis à jour avec succès.");
            return $this->redirectToRoute('app_admin_entity_show', [
                'entityType' => $entityType,
                'id' => $id
            ]);
        }

        return $this->render('admin/admin_dashboard/edit.html.twig', [
            'form' => $form->createView(),
            'entity_type' => $entityType,
            'entity' => $entity,
        ]);
    }

    #[Route('/{entityType}/{id}/delete', name: 'app_admin_entity_delete', methods: ['POST'])]
    public function deleteEntity(string $entityType, int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, ] = self::ENTITY_MAP[$entityType];
        $entity = $entityManager->getRepository($entityClass)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException("Entité non trouvée.");
        }

        if ($this->isCsrfTokenValid('delete'.$id, (string)$request->request->get('_token'))) {
            // Supprimer l'entité et sauvegarder dans la base de données
            $entityManager->remove($entity);
            $entityManager->flush();

            // Ajouter un message flash et rediriger vers le tableau de bord
            $this->addFlash('success', ucfirst($entityType) . " supprimé avec succès.");
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }
}
