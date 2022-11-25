<?php

namespace App\Controller;

use App\Entity\ActividadAct;
use App\Form\ActividadActType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/actividad/act')]
class ActividadActController extends AbstractController
{
    #[Route('/', name: 'app_actividad_act_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $actividadActs = $entityManager
            ->getRepository(ActividadAct::class)
            ->findAll();

        return $this->render('actividad_act/index.html.twig', [
            'actividad_acts' => $actividadActs,
        ]);
    }

    #[Route('/new', name: 'app_actividad_act_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $actividadAct = new ActividadAct();
        $form = $this->createForm(ActividadActType::class, $actividadAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($actividadAct);
            $entityManager->flush();

            return $this->redirectToRoute('app_actividad_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actividad_act/new.html.twig', [
            'actividad_act' => $actividadAct,
            'form' => $form,
        ]);
    }

    #[Route('/{idAct}', name: 'app_actividad_act_show', methods: ['GET'])]
    public function show(ActividadAct $actividadAct): Response
    {
        return $this->render('actividad_act/show.html.twig', [
            'actividad_act' => $actividadAct,
        ]);
    }

    #[Route('/{idAct}/edit', name: 'app_actividad_act_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ActividadAct $actividadAct, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActividadActType::class, $actividadAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_actividad_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actividad_act/edit.html.twig', [
            'actividad_act' => $actividadAct,
            'form' => $form,
        ]);
    }

    #[Route('/{idAct}', name: 'app_actividad_act_delete', methods: ['POST'])]
    public function delete(Request $request, ActividadAct $actividadAct, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actividadAct->getIdAct(), $request->request->get('_token'))) {
            $entityManager->remove($actividadAct);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_actividad_act_index', [], Response::HTTP_SEE_OTHER);
    }
}
