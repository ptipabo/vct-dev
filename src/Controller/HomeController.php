<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(string $locale = 'fr'): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'locale' => $locale,
        ]);
    }

    #[Route('/{locale}', name: 'app_home_lang')]
    public function indexLang(): Response
    {
        $locale = 'fr';

        return $this->index($locale);
    }
}
