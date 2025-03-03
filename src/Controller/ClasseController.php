<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ClasseController extends AbstractController
{
    #[Route('/classe', name: 'app_classe')]
    public function index(): Response
    {
        return $this->render('classe/index.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classes', name: 'app_classes')]
    public function indexAll(ClasseRepository $classeRepository): Response
    {
        $classes = $classeRepository->findAll();

        return $this->render('classe/index_all.html.twig', [
            'classes' => $classes,
        ]);
    }
}
