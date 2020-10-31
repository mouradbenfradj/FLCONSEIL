<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PresentationActionController extends AbstractController
{
    /**
     * @Route("/presentation/action", name="presentation_action")
     */
    public function index(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();
        return $this->render('presentation_action/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
