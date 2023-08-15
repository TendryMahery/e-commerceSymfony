<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleShowController extends AbstractController
{
    /**
     * @Route("/article/show", name="articleShow")
     */
    public function articleShow(): Response
    {
        return $this->render('article_show/articleShow.html.twig', [
            'controller_name' => 'ArticleShowController',
        ]);
    }
}
