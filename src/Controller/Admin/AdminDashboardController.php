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
    #[Route('', name: 'app_admin_dashboard')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $presentations = $entityManager->getRepository(Presentation::class)->findAll();
        $suivis = $entityManager->getRepository(Suivis::class)->findAll();
        $temoignages = $entityManager->getRepository(Temoignages::class)->findAll();

        return $this->render('admin/admin_dashboard/index.html.twig', [
            'presentations' => $presentations,
            'suivis' => $suivis,
            'temoignages' => $temoignages,
        ]);
    }

    #[Route('/{entityType}/create', name: 'app_admin_entity_create')]
    public function createEntity(string $entityType, Request $request, EntityManagerInterface $entityManager): Response
    {
        $entityClass = match ($entityType) {
            'presentation' => Presentation::class,
            'suivis' => Suivis::class,
            'temoignages' => Temoignages::class,
            default => throw $this->createNotFoundException("Type d'entité invalide."),
        };

        $formClass = match ($entityType) {
            'presentation' => PresentationType::class,
            'suivis' => SuivisType::class,
            'temoignages' => TemoignagesType::class,
        };

        $entity = new $entityClass();
        $form = $this->createForm($formClass, $entity);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entity);
            $entityManager->flush();

            $this->addFlash('success', ucfirst($entityType) . " ajouté avec succès.");

            return $this->redirectToRoute('app_admin_dashboard');
        }

        return $this->render('admin/admin_dashboard/create.html.twig', [
            'form' => $form->createView(),
            'entity_type' => $entityType,
        ]);
    }

    #[Route('/{entityType}/{id}/edit', name: 'app_admin_entity_edit')]
    public function editEntity(string $entityType, int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $entityClass = match ($entityType) {
            'presentation' => Presentation::class,
            'suivis' => Suivis::class,
            'temoignages' => Temoignages::class,
            default => throw $this->createNotFoundException("Type d'entité invalide."),
        };

        $entity = $entityManager->getRepository($entityClass)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException(ucfirst($entityType) . " introuvable.");
        }

        $form = $this->createForm(match ($entityType) {
            'presentation' => PresentationType::class,
            'suivis' => SuivisType::class,
            'temoignages' => TemoignagesType::class,
        }, $entity);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', ucfirst($entityType) . " modifié avec succès.");

            return $this->redirectToRoute('app_admin_dashboard');
        }

        return $this->render('admin/admin_dashboard/edit.html.twig', [
            'form' => $form->createView(),
            'entity_type' => $entityType,
        ]);
    }

    #[Route('/{entityType}/{id}', name: 'app_admin_entity_show')]
    public function showEntity(string $entityType, int $id, EntityManagerInterface $entityManager): Response
    {
        $entityClass = match ($entityType) {
            'presentation' => Presentation::class,
            'suivis' => Suivis::class,
            'temoignages' => Temoignages::class,
            default => throw $this->createNotFoundException("Type d'entité invalide."),
        };

        $entity = $entityManager->getRepository($entityClass)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException(ucfirst($entityType) . " introuvable.");
        }

        return $this->render('admin/admin_dashboard/show.html.twig', [
            'entity' => $entity,
            'entity_type' => $entityType,
        ]);
    }
}
