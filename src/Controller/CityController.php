<?php

namespace App\Controller;

use App\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/city', name:'city_')]
class CityController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('city/index.html.twig', [
            'controller_name' => 'CityController',
        ]);
    }

    #[Route('{city}', name:'show', methods:['GET'])]
    public function show(City $city)
    {
    }

    #[Route('/', name:'create', methods:['POST'])]
    public function create()
    {
    }

    #[Route('{city}/edit', name:'edit', methods:['GET', 'POST'])]
    public function edit(City $city)
    {
    }

    #[Route('{city}', name:'delete', methods:['DELETE'])]
    public function delete(City $city)
    {
    }
}
