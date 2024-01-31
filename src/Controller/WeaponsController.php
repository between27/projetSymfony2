<?php

namespace App\Controller;

use App\Repository\WeaponsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeaponsController extends AbstractController
{
    #[Route('/weapons/index', name: 'app_weapons')]
    public function index(WeaponsRepository $weapon): Response
    {
        $weapons = $weapon->findAll();



        return $this->render('weapons/index.html.twig', [
            'controller_name' => 'WeaponsController',
            'weapons' => $weapons
        ]);
    }

    #[Route('/weapons/show/{id}', name: 'app_weapons_show')]
    public function show(WeaponsRepository $weapon, int $id): Response
    {
        $weapon = $weapon->find($id);

        return $this->render('weapons/show.html.twig', [
            'controller_name' => 'WeaponsController',
            'weapon' => $weapon
        ]);
    }

}
