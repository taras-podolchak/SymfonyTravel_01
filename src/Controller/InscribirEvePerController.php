<?php

namespace App\Controller;

use App\Entity\InscribirEvePer;
use App\Form\InscribirEvePerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/inscribir/eve/per')]
class InscribirEvePerController extends AbstractController
{
    #[Route('/', name: 'app_inscribir_eve_per_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $inscribirEvePers = $entityManager
            ->getRepository(InscribirEvePer::class)
            ->findAll();

        return $this->render('inscribir_eve_per/index.html.twig', [
            'inscribir_eve_pers' => $inscribirEvePers,
        ]);
    }

    #[Route('/new', name: 'app_inscribir_eve_per_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $inscribirEvePer = new InscribirEvePer();
        $form = $this->createForm(InscribirEvePerType::class, $inscribirEvePer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($inscribirEvePer);
            $entityManager->flush();

            return $this->redirectToRoute('app_inscribir_eve_per_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('inscribir_eve_per/new.html.twig', [
            'inscribir_eve_per' => $inscribirEvePer,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvePer}', name: 'app_inscribir_eve_per_show', methods: ['GET'])]
    public function show(InscribirEvePer $inscribirEvePer): Response
    {
        return $this->render('inscribir_eve_per/show.html.twig', [
            'inscribir_eve_per' => $inscribirEvePer,
        ]);
    }

    #[Route('/{idEvePer}/edit', name: 'app_inscribir_eve_per_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, InscribirEvePer $inscribirEvePer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InscribirEvePerType::class, $inscribirEvePer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_inscribir_eve_per_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('inscribir_eve_per/edit.html.twig', [
            'inscribir_eve_per' => $inscribirEvePer,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvePer}', name: 'app_inscribir_eve_per_delete', methods: ['POST'])]
    public function delete(Request $request, InscribirEvePer $inscribirEvePer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$inscribirEvePer->getIdEvePer(), $request->request->get('_token'))) {
            $entityManager->remove($inscribirEvePer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_inscribir_eve_per_index', [], Response::HTTP_SEE_OTHER);
    }
}
