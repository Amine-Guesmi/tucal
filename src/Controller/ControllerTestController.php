<?php

namespace App\Controller;

use App\Entity\Twt;
use App\Form\TwtType;
use App\Repository\TwtRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/controller/test')]
class ControllerTestController extends AbstractController
{
    #[Route('/', name: 'app_controller_test_index', methods: ['GET'])]
    public function index(TwtRepository $twtRepository): Response
    {
        return $this->render('controller_test/index.html.twig', [
            'twts' => $twtRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_controller_test_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TwtRepository $twtRepository): Response
    {
        $twt = new Twt();
        $form = $this->createForm(TwtType::class, $twt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $twtRepository->add($twt, true);

            return $this->redirectToRoute('app_controller_test_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('controller_test/new.html.twig', [
            'twt' => $twt,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_controller_test_show', methods: ['GET'])]
    public function show(Twt $twt): Response
    {
        return $this->render('controller_test/show.html.twig', [
            'twt' => $twt,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_controller_test_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Twt $twt, TwtRepository $twtRepository): Response
    {
        $form = $this->createForm(TwtType::class, $twt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $twtRepository->add($twt, true);

            return $this->redirectToRoute('app_controller_test_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('controller_test/edit.html.twig', [
            'twt' => $twt,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_controller_test_delete', methods: ['POST'])]
    public function delete(Request $request, Twt $twt, TwtRepository $twtRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$twt->getId(), $request->request->get('_token'))) {
            $twtRepository->remove($twt, true);
        }

        return $this->redirectToRoute('app_controller_test_index', [], Response::HTTP_SEE_OTHER);
    }
}
