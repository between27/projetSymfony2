<?php

namespace App\Controller;

use App\Entity\Characters;
use App\Repository\CharactersRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class CharactersController extends AbstractController
{
    #[Route('/characters', name: 'app_characters')]
    public function index(): Response
    {
        return $this->render('characters/index.html.twig', [
            'controller_name' => 'CharactersController',
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/mycharacters', name: 'my_characters')]
    public function myCharacters(UserInterface $user, CharactersRepository $character): Response
    {

        $characters = $character->findBy(['userId' => $user->getId()]);


        return $this->render('characters/mycharacters.html.twig', [
            'controller_name' => 'CharactersController',
            'characters' => $characters
        ]);
    }
}
