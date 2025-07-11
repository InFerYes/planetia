<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        return $this->render('main/homepage.html.twig');
    }

	#[Route('/game', name: 'game')]
    public function game(#[MapQueryParameter] string $page): Response
    {
        return $this->render('gamepages/game.html.twig', ['page' => $page]);
    }
}
