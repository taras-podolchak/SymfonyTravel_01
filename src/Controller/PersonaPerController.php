<?php

namespace App\Controller;

use App\Entity\PersonaPer;
use App\Form\PersonaPerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/persona/per')]
class PersonaPerController extends AbstractController
{
    #[Route('/', name: 'app_persona_per_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $personaPers = $entityManager
            ->getRepository(PersonaPer::class)
            ->findAll();

        return $this->render('persona_per/index.html.twig', [
            'persona_pers' => $personaPers,
        ]);
    }

    #[Route('/new', name: 'app_persona_per_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $personaPer = new PersonaPer();
        $form = $this->createForm(PersonaPerType::class, $personaPer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($personaPer);
            $entityManager->flush();

            return $this->redirectToRoute('app_persona_per_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('persona_per/new.html.twig', [
            'persona_per' => $personaPer,
            'form' => $form,
        ]);
    }

    #[Route('/{idPer}', name: 'app_persona_per_show', methods: ['GET'])]
    public function show(PersonaPer $personaPer): Response
    {
        return $this->render('persona_per/show.html.twig', [
            'persona_per' => $personaPer,
        ]);
    }

    #[Route('/{idPer}/edit', name: 'app_persona_per_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PersonaPer $personaPer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PersonaPerType::class, $personaPer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_persona_per_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('persona_per/edit.html.twig', [
            'persona_per' => $personaPer,
            'form' => $form,
        ]);
    }

    #[Route('/{idPer}', name: 'app_persona_per_delete', methods: ['POST'])]
    public function delete(Request $request, PersonaPer $personaPer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personaPer->getIdPer(), $request->request->get('_token'))) {
            $entityManager->remove($personaPer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_persona_per_index', [], Response::HTTP_SEE_OTHER);
    }
}
