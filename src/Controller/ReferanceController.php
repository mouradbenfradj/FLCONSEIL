<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReferanceController extends AbstractController
{
    /**
     * @Route("/referance", name="referance")
     */
    public function index()
    {
        return $this->render('referance/index.html.twig', [
        ]);
    }
}
