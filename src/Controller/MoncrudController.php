<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// CRUD des articles manuel
#[Route('/moncrudarticle', name: 'app_moncrud')]
class MoncrudController extends AbstractController
{
    #[Route('/liste_articles',  methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        //dd($articleRepository->findAll());
        //dd("je suis dans la liste des articles");
        return $this->render('moncrud/index.html.twig', [
             'liste_articles'=> $articleRepository->findAll()
        ]);
    }

    #[Route('/{id}', methods: ['GET'])]
    public function index2(Article $article): Response
    {
        dd($article);
        dd("je suis dans un article");
        return $this->render('moncrud/index.html.twig', [
            'controller_name' => 'MoncrudController',
        ]);
    }

    #[Route('/supprimer_article', name: 'app_produit_index', methods: ['GET'])]
    public function index3(): Response
    {
        return $this->render('moncrud/index.html.twig', [
            'controller_name' => 'MoncrudController',
        ]);
    }
}
