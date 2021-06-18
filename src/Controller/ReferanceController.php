<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReferanceController extends AbstractController
{
    /**
     * @Route("/referance", name="referance")
     */
    public function index(): Response
    {
        return $this->render('referance/index.html.twig', [
            'controller_name' => 'ReferanceController',
        ]);
    }
}
