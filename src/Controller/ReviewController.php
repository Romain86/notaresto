<?php

namespace App\Controller;

use App\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('review', name:'review_')]
class ReviewController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('review/index.html.twig', [
            'controller_name' => 'ReviewController',
        ]);
    }

    #[Route('/{review}', name:'show', methods:['GET'])]
    public function show(Review $review)
    {
    }

    #[Route('/', name:'create', methods:['POST'])]
    public function create()
    {
    }

    #[Route('/{review}/edit', name:'edit', methods:['GET', 'POST'])]
    public function edit(Review $review)
    {
    }

    #[Route('/{review}', name:'delete', methods:'DELETE')]
    public function delete(Review $review)
    {
    }
}
