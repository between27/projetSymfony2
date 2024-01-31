<?php

namespace App\Controller;

use App\Entity\CharacterPhoto;
use App\Entity\Characters;
use App\Form\CharactersType;
use App\Repository\CharactersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class CharactersController extends AbstractController
{

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/characters', name: 'app_characters')]
    public function index(): Response
    {
        return $this->render('characters/index.html.twig', [
            'controller_name' => 'CharactersController',
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/characters/mine', name: 'my_characters')]
    public function myCharacters(UserInterface $user, CharactersRepository $character): Response
    {

        $characters = $character->findBy(['userId' => $user->getId()]);


        return $this->render('characters/mycharacters.html.twig', [
            'controller_name' => 'CharactersController',
            'characters' => $characters
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/characters/new', name: 'character_new')]
    public function new(Request $request, EntityManagerInterface $entityManager)
    {
        $character = new Characters();
        $form = $this->createForm(CharactersType::class, $character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Créer ou mettre à jour CharacterPhoto séparément
            $user = $this->security->getUser();
            $character->setUserId($user);
            $photoUrlString = $form->get('photoUrl')->getData();
            $characterPhoto = new CharacterPhoto();
            $characterPhoto->setUrl($photoUrlString);
            $entityManager->persist($characterPhoto);


            $character->setPhotoUrl($characterPhoto);
            $entityManager->persist($character);
            $entityManager->flush();

            return $this->redirectToRoute('my_characters');
        }

        return $this->render('characters/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
