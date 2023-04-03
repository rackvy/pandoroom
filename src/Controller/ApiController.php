<?php

namespace App\Controller;

use App\Repository\Quest3Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/apiv1', name: 'app_api')]
    public function index(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

    #[Route('/apiv1/quests', name: 'app_api_all_quests')]
    public function getQuests(
        Quest3Repository $quest3Repository
    ): Response
    {
        $arrayCollection = [];
        $items = $quest3Repository->findAll();
        //print_r($items);
        foreach ($items as $item){
            $arrayCollection[] = [
                'id' => $item->getId(),
                'name' => $item->getName(),
                'description' => $item->getDescription(),
                'picture' => $item->getPicture(),
                'more_photos' => $item->getMorePhotos(),
                'age' => $item->getAge(),
                'category' => $item->getCategory(),
                'complexity' => $item->getComplexity(),
                'people_count' => $item->getPeopleCount(),
            ];
        }
        //$arrData = $this->getCourseJsonArrData($items);


        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->setContent(json_encode($arrayCollection));

        return $response;
    }
}
