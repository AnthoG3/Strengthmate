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
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\DBAL\Exception\DriverException;
use Symfony\Component\Filesystem\Filesystem;

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
    public function createEntity(string $entityType, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, $formClass] = self::ENTITY_MAP[$entityType];
        $entity = new $entityClass();
        $form = $this->createForm($formClass, $entity);

        if ($entityType === 'presentation') {
            $form->remove('image');
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if ($entityType === 'suivis') {
                    $imageFile = $form->get('image')->getData();
                    if ($imageFile) {
                        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeFilename = $slugger->slug($originalFilename);
                        $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                        try {
                            $imageFile->move(
                                $this->getParameter('uploads_suivis_dir'),
                                $newFilename
                            );
                            $entity->setImage('uploads/suivis/' . $newFilename);
                        } catch (FileException $e) {
                            $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                        }
                    }
                }

                $entityManager->persist($entity);
                $entityManager->flush();

                $this->addFlash('success', ucfirst($entityType) . " ajouté avec succès.");
                return $this->redirectToRoute('app_admin_dashboard');

            } catch (DriverException $e) {
                if (strpos($e->getMessage(), 'SQLSTATE[22001]') !== false) {
                    $this->addFlash('error', 'Le contenu est trop long pour être enregistré.');
                } else {
                    $this->addFlash('error', 'Une erreur est survenue lors de la création de ' . $entityType . '.');
                }

                return $this->redirectToRoute('app_admin_dashboard');
            }
        }

        return $this->render('admin/admin_dashboard/create.html.twig', [
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

        [$entityClass, ] = self::ENTITY_MAP[$entityType];
        $entity = $entityManager->getRepository($entityClass)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException("Entité non trouvée.");
        }

        // Vérification de l'existence physique de l'image (pour les suivis uniquement)
        $imageExists = false;
        if ($entityType === 'suivis' && method_exists($entity, 'getImage')) {
            $image = $entity->getImage();
            if ($image) {
                $filesystem = new Filesystem();
                $projectDir = $this->getParameter('kernel.project_dir');
                $imagePath = $projectDir . '/public/' . $image;
                $imageExists = $filesystem->exists($imagePath);
            }
        }

        return $this->render('admin/admin_dashboard/show.html.twig', [
            'entity_type' => $entityType,
            'entity' => $entity,
            'image_exists' => $imageExists,
        ]);
    }

    #[Route('/{entityType}/{id}/edit', name: 'app_admin_entity_edit', methods: ['GET', 'POST'])]
    public function editEntity(string $entityType, int $id, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        if (!isset(self::ENTITY_MAP[$entityType])) {
            throw $this->createNotFoundException("Type d'entité invalide.");
        }

        [$entityClass, $formClass] = self::ENTITY_MAP[$entityType];
        $entity = $entityManager->getRepository($entityClass)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException("Entité non trouvée.");
        }

        $form = $this->createForm($formClass, $entity);

        if ($entityType === 'presentation') {
            $form->remove('image');
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', ucfirst($entityType) . " mis à jour avec succès.");
                return $this->redirectToRoute('app_admin_entity_show', [
                    'entityType' => $entityType,
                    'id' => $id
                ]);
            } catch (DriverException $e) {
                if (strpos($e->getMessage(), 'SQLSTATE[22001]') !== false) {
                    $this->addFlash('error', 'Le contenu est trop long pour être enregistré.');
                } else {
                    $this->addFlash('error', 'Une erreur est survenue lors de la modification de ' . $entityType . '.');
                }

                return $this->redirectToRoute('app_admin_dashboard');
            }
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

        if ($this->isCsrfTokenValid('delete' . $id, (string) $request->request->get('_token'))) {
            $entityManager->remove($entity);
            $entityManager->flush();
            $this->addFlash('danger', ucfirst($entityType) . " supprimé avec succès.");
        } else {
            $this->addFlash('error', "Échec de la suppression : token CSRF invalide.");
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/logout', name: 'admin_logout', methods: ['GET'])]
    public function logout(): Response
    {
        throw new \Exception('This should never be reached!');
    }
}
