<?php

namespace App\Controller;

use App\Entity\Teams;
use App\Form\TeamsType;
use App\Repository\TeamsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamsController extends AbstractController
{
    #[Route('/teams/index', name: 'app_teams')]
    public function index(TeamsRepository $team): Response
    {
        $teams = $team->findAll();

        return $this->render('teams/index.html.twig', [
            'controller_name' => 'TeamsController',
            'teams' => $teams
        ]);
    }

    #[Route('/teams/new', name: 'team_new')]
    public function new(Request $request, EntityManagerInterface $entityManager)
    {
        $team = new Teams();
        $form = $this->createForm(TeamsType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($team);
            $entityManager->flush();

            return $this->redirectToRoute('app_teams');
        }

        return $this->render('teams/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
