<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualityController extends AbstractController
{
    /**
     * @Route("/actuality", name="actuality")
     */
    public function index(): Response
    {
        return $this->render('actuality/index.html.twig', [
            'controller_name' => 'ActualityController',
        ]);
    }
}
