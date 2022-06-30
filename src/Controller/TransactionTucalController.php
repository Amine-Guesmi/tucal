<?php

namespace App\Controller;

use DateTime;
use App\Entity\Twt;
use App\Entity\Statistique;
use App\Entity\User;
use App\Repository\TwtRepository;
use App\Repository\StatistiqueRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class TransactionTucalController extends AbstractController
{
    #[Route('/', name: 'app_transaction_tucal')]
    public function index(StatistiqueRepository $repo, TwtRepository $repo_twt, UserPasswordHasherInterface $passwordHasher ): Response
    {

        /*
        $user = new User();
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            "123456"
        );
        dd($hashedPassword);*/

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $stats = $repo->find(1);
        //$twt = $repo_twt->findAll();
        $twt = $repo_twt->findBy([], array('dateEntree' => 'DESC'));
        return $this->render('transaction_tucal/index.html.twig', [
            'stats' => $stats,
            'twt' => $twt
        ]);
    }

    #[Route('/addStats/{id}', name: 'app_add_stats', methods: ["POST"])]
    public function addStats(Request $request,Statistique $stats, StatistiqueRepository $repo, TwtRepository $repo_twt ): Response
    {

        $parameters = json_decode($request->getContent(), true);
        $entityManager = $this->get('doctrine')->getManager();

        if($parameters['codeSecurity'] == "AzErTy987654321"){
            $stats->setNombreCam((int) $parameters['nombreCam']);
            $stats->setNombreP((int) $parameters['nombreP']);
            $stats->setNombreSemi((int) $parameters['nombreSemi']);
    
            $entityManager->persist($stats);
            $entityManager->flush();
    
            return new JsonResponse("add success", 200, ["Content-Type" => "application/json"]);
        }
        
        return new JsonResponse("erreur", 500, ["Content-Type" => "application/json"]);
    }

    #[Route('/addTWT', name: 'app_add_TWT', methods: ["POST"])]
    public function addTWT(Request $request ,StatistiqueRepository $repo, TwtRepository $repo_twt ): Response
    {
        $parameters = json_decode($request->getContent(), true);
        $entityManager = $this->get('doctrine')->getManager();
        $twt = new Twt();
        if($parameters['codeSecurity'] == "AzErTy987654321"){
            
            $twt->setRang($parameters['rang']);
            $twt->setBonEntree($parameters['bonEntree']);
            $twt->setRegion($parameters['region']);
            $twt->setZone($parameters['zone']);
            $twt->setMatricule($parameters['matricule']);
            $twt->setType($parameters['type']);
            $twt->setChauffeur($parameters['chauffeur']);
            $twt->setNumTel($parameters['numTel']);
            $twt->setDateEntree(new \DateTime($parameters['dateEntree']));
            $twt->setArticle($parameters['article']);

            $entityManager->persist($twt);
            $entityManager->flush();
    
            return new JsonResponse("add success", 200, ["Content-Type" => "application/json"]);
        }
        
        return new JsonResponse("erreur", 500, ["Content-Type" => "application/json"]);

    }
}
