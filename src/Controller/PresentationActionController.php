<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationActionController extends AbstractController
{
    /**
     * @Route("/presentation/action", name="presentation_action")
     */
    public function index(): Response
    {
        return $this->render('presentation_action/index.html.twig'/*, [
            'controller_name' => 'PresentationActionController',
        ]*/);
    }
}
