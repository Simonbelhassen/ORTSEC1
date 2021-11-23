<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListerController extends AbstractController
{
    #[Route('/lister', name: 'lister')]
    public function index(): Response
    {
        return $this->render('lister/index.html.twig', [
            'controller_name' => 'ListerController',
        ]);
    }
}
