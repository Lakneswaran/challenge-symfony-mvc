<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/aboutme', name: 'aboutMe')]
    public function index(): Response
    {
        return $this->render('aboutme/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }


    #[Route('/', name: 'Homepage')]
    public function aboutme(): Response
    {
        return $this->render('aboutme/index.html.twig', [
            'name' => 'becode',
        ]);
    }
}
