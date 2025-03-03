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
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
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

    #[Route('/{entityType}/create', name: 'app_admin_entity_create')]
    public function createEntity(string $entityType, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, $formClass] = self::ENTITY_MAP[$entityType];

        $entity = new $entityClass();
        $form = $this->createForm($formClass, $entity);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $uploadsDir = $this->getParameter('uploads_directory') . '/' . $entityType . 's/';
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($uploadsDir, $newFilename);
                    $entity->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', "Erreur lors de l'upload de l'image.");
                    return $this->redirectToRoute('app_admin_entity_create', ['entityType' => $entityType]);
                }
            }

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
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, $formClass] = self::ENTITY_MAP[$entityType];

        $entity = $entityManager->getRepository($entityClass)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException(ucfirst($entityType) . " introuvable.");
        }

        $oldImage = $entity->getImage();
        $form = $this->createForm($formClass, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $uploadsDir = $this->getParameter('uploads_directory') . '/' . $entityType . 's/';
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($uploadsDir, $newFilename);
                    $entity->setImage($newFilename);

                    if ($oldImage) {
                        unlink($uploadsDir . $oldImage);
                    }
                } catch (FileException $e) {
                    $this->addFlash('error', "Erreur lors de l'upload de l'image.");
                    return $this->redirectToRoute('app_admin_entity_edit', ['entityType' => $entityType, 'id' => $id]);
                }
            }

            $entityManager->flush();
            $this->addFlash('success', ucfirst($entityType) . " modifié avec succès.");
            return $this->redirectToRoute('app_admin_dashboard');
        }

        return $this->render('admin/admin_dashboard/edit.html.twig', [
            'form' => $form->createView(),
            'entity_type' => $entityType,
        ]);
    }

    #[Route('/{entityType}/{id}/show', name: 'app_admin_entity_show', methods: ['GET'])]
    public function showEntity(string $entityType, int $id, EntityManagerInterface $entityManager): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass] = self::ENTITY_MAP[$entityType];

        $entity = $entityManager->getRepository($entityClass)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException(ucfirst($entityType) . " introuvable.");
        }

        return $this->render('admin/admin_dashboard/show.html.twig', [
            'entity' => $entity,
            'entity_type' => $entityType,
        ]);
    }

    #[Route('/{entityType}/{id}/delete', name: 'app_admin_entity_delete', methods: ['POST'])]
    public function deleteEntity(string $entityType, int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass] = self::ENTITY_MAP[$entityType];

        $entity = $entityManager->getRepository($entityClass)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException(ucfirst($entityType) . " introuvable.");
        }

        if ($this->isCsrfTokenValid('delete' . $entity->getId(), $request->request->get('_token'))) {
            if ($entity->getImage()) {
                $uploadsDir = $this->getParameter('uploads_directory') . '/' . $entityType . 's/';
                $imagePath = $uploadsDir . $entity->getImage();
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $entityManager->remove($entity);
            $entityManager->flush();

            $this->addFlash('success', ucfirst($entityType) . " supprimé avec succès.");
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }
}
