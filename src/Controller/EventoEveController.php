<?php

namespace App\Controller;

use App\Entity\ActividadAct;
use App\Entity\EventoEve;
use App\Entity\InscribirEvePer;
use App\Entity\PersonaPer;
use App\Form\EventoEveType;
use App\Repository\EventoEveRepository;
use App\Repository\ActividadActRepository;
use App\Repository\PersonaPerRepository;
use App\Repository\InscribirEvePerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/evento')]
class EventoEveController extends AbstractController
{

    #[Route('/', name: 'app_evento_eve_index')]
    public function index(EventoEveRepository $repoEve,): Response
    {
        $eventoEves = $repoEve->findAll();

        return $this->render('evento_eve/index.html.twig', [
            'evento_eves' => $eventoEves,
        ]);
    }

    #[Route('/getEveAndActs', name: 'getEveAndActs')]
    public function getEveAndActs(Request $request,  InscribirEvePerRepository $repoInsEvePer, PersonaPerRepository $repoPersona, EventoEveRepository $repoEve, ActividadActRepository $repoAct): Response
    {
        if ($id = $request->request->get('idEve')) {
            $idPersonasInscritas = $repoInsEvePer->getIdPersForIdEve($id);

            foreach ($idPersonasInscritas as  $registro) {
                $personasInscritas[] = $repoPersona->getPersForIdEve($registro->getIdPer()->getIdPer());
            }

            $actividades = $repoAct->getActsForIdEve($id);
                        
            return $this->render('plantillas/home.html.twig', [
                'evento_eves' => $repoEve->findAll(),
                'evento_eve' => $repoEve->find($id),
                'persona_size' => sizeof($personasInscritas),
                'persona_pers' => $personasInscritas,
                'actividad_acts' => $actividades,
                'actividad_size' => sizeof($actividades),
            ]);
        } else {

            return $this->render('plantillas/home.html.twig', [
                'evento_eves' => $repoEve->findAll(),
            ]);
        }
    }

    #[Route('/formCreateEve', name: 'formCreateEve')]
    public function formCreateEve(): Response
    {
        return $this->render('evento_eve/CreateEveFormulario.html.twig');
    }


    #[Route('/createEve', name: 'createEve')]
    public function createEve(Request $request, EventoEveRepository $repoEve)
    {
        $eventoEves = $repoEve->findAll();

        $evento = new EventoEve();
        $evento->setTituloEve($request->request->get('txtTituloEve'));
        $evento->setFotoEve("eventos/" . (1 + sizeof($eventoEves)) . ".jpg");
        $evento->setEstadoEve($request->request->get('txtEstadoEve'));
        $evento->setPrecioEve($request->request->get('numPrecioEve'));
        $evento->setNivelEve($request->request->get('txtNivelEve'));
        $evento->setTransportetipoEve($request->request->get('txtTransportetipoEve'));
        $evento->setSalidaidaEve($request->request->get('txtSalidaidaEve'));
        $evento->setSalidavueltaEve($request->request->get('txtSalidavueltaEve'));
        $evento->setLlegadaidaEve($request->request->get('txtLlegadaidaEve'));
        $evento->setLlegadavueltaEve($request->request->get('txtLlegadavueltaEve'));
        $evento->setFechaidaEve(new \DateTime('@' . strtotime($request->request->get('txtFechaidaEve'))));
        $evento->setFechavueltaEve(new \DateTime('@' . strtotime($request->request->get('txtFechavueltaEve'))));
        $evento->setDistanciaidaEve($request->request->get('numDistanciaidaEve'));
        $evento->setDistanciavueltaEve($request->request->get('numDistanciavueltaEve'));

        $repoEve->createEve($evento);

        return $this->redirectToRoute('formCreateEve');
    }
    /*
    //por defecto
    #[Route('/{idEve}', name: 'app_evento_eve_show', methods: ['GET'])]
    public function show(EventoEve $eventoEve): Response
    {
        return $this->render('evento_eve/show.html.twig', [
            'evento_eve' => $eventoEve,
        ]);
    }

*/
    #[Route('/{idEve}/edit', name: 'app_evento_eve_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EventoEve $eventoEve, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventoEveType::class, $eventoEve);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evento_eve_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evento_eve/edit.html.twig', [
            'evento_eve' => $eventoEve,
            'form' => $form,
        ]);
    }
    
    #[Route('/{idEve}/eliminar', name: 'app_evento_eve_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, EventoEve $eventoEve,EventoEveRepository $repoEve, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $eventoEve->getIdEve(), $request->request->get('_token'))) {
            $repoEve->remove($eventoEve);
        }else if($eventoEve->getIdEve()){
            $repoEve->remove($eventoEve);
        }

        $eventoEves = $entityManager
            ->getRepository(EventoEve::class)
            ->findAll();

        return $this->render('rol_administrador/adminHomeWithAct.html.twig', [
            'evento_eves' => $eventoEves,
        ]);
    }


    #[Route('/adminHome', name: 'adminHome')]
    public function adminHome(Request $request,  InscribirEvePerRepository $repoInsEvePer, PersonaPerRepository $repoPersona, EventoEveRepository $repoEve, ActividadActRepository $repoAct): Response
    {
        if ($id = $request->request->get('idEve')) {
            $idPersonasInscritas = $repoInsEvePer->getIdPersForIdEve($id);

            foreach ($idPersonasInscritas as  $registro) {
                $personasInscritas[] = $repoPersona->getPersForIdEve($registro->getIdPer()->getIdPer());
            }

            $actividades = $repoAct->getActsForIdEve($id);

            return $this->render('rol_administrador/adminHomeWithAct.html.twig', [
                'evento_eves' => $repoEve->findAll(),
                'evento_eve' => $repoEve->find($id),
                'persona_size' => sizeof($personasInscritas),
                'persona_pers' => $personasInscritas,
                'actividad_acts' => $actividades,
                'actividad_size' => sizeof($actividades),
            ]);
        } else {

            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            return $this->render('rol_administrador/adminHomeWithAct.html.twig', [
                'evento_eves' => $repoEve->findAll()
            ]);
        }
    }
}
