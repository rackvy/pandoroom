<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PandoroomController extends AbstractController
{
    #[Route('/', name: 'app_pandoroom')]
    public function index(Request $request): Response
    {
      dump($request);
      return $this->render('pandoroom/index.html.twig', [
          'controller_name' => 'PandoroomController',
      ]);
    }
}
