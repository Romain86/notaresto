<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('restaurant', name: 'restaurant_')]
class RestaurantController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurantRepository->findLastTenElements(),
        ]);
    }

    #[Route('/{restaurant}', name: 'show', methods: ['GET'])]
    public function show(Restaurant $restaurant)
    {
    }

    #[Route('/new', name: 'new', methods: ['GET'])]
    public function new()
    {
    }

    #[Route('/', name: 'create', methods: ['POST'])]
    public function create()
    {
    }

    #[Route('/{restaurant}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Restaurant $restaurant)
    {
    }

    #[Route('/{restaurant}', name:'delete', methods:['DELETE'])]
    public function delete(Restaurant $restaurant)
    {
    }
}
