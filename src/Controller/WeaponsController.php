<?php

namespace App\Controller;

use App\Entity\WeaponPhoto;
use App\Entity\Weapons;
use App\Form\WeaponsType;
use App\Repository\WeaponsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

        if (!$weapon) {
            throw $this->createNotFoundException('L\'arme demandée n\'existe pas.');
        }
        return $this->render('weapons/show.html.twig', [
            'controller_name' => 'WeaponsController',
            'weapon' => $weapon
        ]);
    }

    #[isGranted('ROLE_ADMIN')]
    #[Route('/weapons/create', name: 'app_weapons_create')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $weapon = new Weapons();
        $form = $this->createForm(WeaponsType::class, $weapon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoUrl = $form->get('photoUrl')->getData();
            $weaponPhoto = new WeaponPhoto();
            $weaponPhoto->setUrl($photoUrl);
            $entityManager->persist($weaponPhoto);

            $weapon->setPhotoUrl($weaponPhoto);
            $entityManager->persist($weapon);
            $entityManager->flush();
            $this->addFlash('success', 'Arme ajoutée avec succès !');
            return $this->redirectToRoute('app_weapons');
        }

        return $this->render('weapons/create.html.twig', [
            'controller_name' => 'WeaponsController',
            'form' => $form->createView()
        ]);
    }


    #[isGranted('ROLE_ADMIN')]
    #[Route('/weapon/delete/{id}', name: 'weapon_delete')]
    public function delete(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $weapon = $entityManager->getRepository(Weapons::class)->find($id);

        if (!$weapon) {
            throw $this->createNotFoundException('Aucune arme trouvée pour l\'id ' . $id);
        }

        $entityManager->remove($weapon);
        $entityManager->flush();

        return $this->redirectToRoute('app_weapons');
    }


}
