<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $user = $this->getUser();
        $articles = $articleRepository->findBy(
            [ 'user' => $user],
            [ 'createdAt' => 'DESC'],
            3
        );

        $articleCount = $articleRepository->count(
            [ 'user' => $user] 
        );

        return $this->render('pages/account/index.html.twig', [
            'articles' => $articles,
            'articleCount' => $articleCount,
        ]);
    }
}
