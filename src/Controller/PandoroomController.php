<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PandoroomController extends AbstractController
{
    #[Route('/', name: 'app_pandoroom')]
    public function index(): Response
    {
        return $this->render('pandoroom/index.html.twig', [
            'controller_name' => 'PandoroomController',
        ]);
    }
}
