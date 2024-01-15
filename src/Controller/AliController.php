<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AliController extends AbstractController
{
    #[Route('/ali', name: 'app_ali')]
    public function index(): Response
    {
        return $this->render('ali/index.html.twig', [
            'controller_name' => 'AliController',
        ]);
    }
}
