<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategoryRepository $categoryRepository, ArticleRepository $articleRepository): Response
    {
        return $this->render('pages/home/index.html.twig', [
            'categories' => $categoryRepository->findBy([], [],4),
            'articles' => $articleRepository->findBy(
                [],
                ["createdAt" => "DESC"],
                4
            ),
        ]);
    }
}
