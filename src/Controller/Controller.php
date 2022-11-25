<?php

namespace App\Controller;

use App\Repository\Actividad_actRepository;
use App\Entity\Actividad_act;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\EventoEve;
use Doctrine\ORM\EntityManagerInterface;



class Controller extends AbstractController
{
    #[Route('/', name: 'Home' , methods: ['GET'])]
    public function Home(EntityManagerInterface $entityManager): Response
    {
        $eventoEves = $entityManager
            ->getRepository(EventoEve::class)
            ->findAll();

        return $this->render('plantillas/home.html.twig', [
            'evento_eves' => $eventoEves,
        ]);
    
    }

}
