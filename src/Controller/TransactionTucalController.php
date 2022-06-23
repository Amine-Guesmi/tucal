<?php

namespace App\Controller;

use App\Entity\Twt;
use App\Entity\Statistique;
use App\Repository\TwtRepository;
use App\Repository\StatistiqueRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TransactionTucalController extends AbstractController
{
    #[Route('/', name: 'app_transaction_tucal')]
    public function index(StatistiqueRepository $repo, TwtRepository $repo_twt ): Response
    {

        $stats = $repo->find(1);
        $twt = $repo_twt->findAll();
        return $this->render('transaction_tucal/index.html.twig', [
            'stats' => $stats,
            'twt' => $twt
        ]);
    }

    #[Route('/addStats/{id}', name: 'app_add_stats', methods: ["POST"])]
    public function addStats(Request $request,Statistique $stats, StatistiqueRepository $repo, TwtRepository $repo_twt ): Response
    {
        $entityManager = $this->get('doctrine')->getManager();
        $stats->setNombreCam((int) $request->get("nombreCam"));
        $stats->setNombreP((int) $request->get("nombreP"));
        $stats->setNombreSemi((int) $request->get("nombreSemi"));

        $entityManager->persist($stats);
        $entityManager->flush();

        return new JsonResponse("createdSucess", 200, ["Content-Type" => "application/json"]);

    }

    #[Route('/addTWT', name: 'app_add_TWT', methods: ["POST"])]
    public function addTWT(Request $request, StatistiqueRepository $repo, TwtRepository $repo_twt ): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $twt = new Twt();

        
        $entityManager->flush();

        return new JsonResponse("createdSucess", 200, ["Content-Type" => "application/json"]);

    }
}