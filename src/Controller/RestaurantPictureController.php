<?php

namespace App\Controller;

use App\Entity\RestaurantPicture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route]
class RestaurantPictureController extends AbstractController
{
    #[Route('/restaurant/picture', name: 'restaurant_picture_index')]
    public function index(): Response
    {
        return $this->render('restaurant_picture/index.html.twig', [
            'controller_name' => 'RestaurantPictureController',
        ]);
    }

    #[Route('/picture/{picture}', name:'picture_show', methods:['GET'])]
    public function show(RestaurantPicture $picture)
    {
    }

    #[Route('/picture', name:'picture_create', methods:['POST'])]
    public function create()
    {
    }

    #[Route('picture/{picture}/edit', name:'picture_edit', methods:['GET', 'POST'])]
    public function edit(RestaurantPicture $picture)
    {
    }

    #[Route('/picture/{picture}', name:'picture_delete', methods:'DELETE')]
    public function delete(RestaurantPicture $picture)
    {
    }
}
