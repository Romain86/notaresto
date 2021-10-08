<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Restaurant;
use App\Repository\CityRepository;

class RestaurantFixtures extends Fixture implements DependentFixtureInterface
{
    private $cityRepository;

    public  function __construct(CityRepository $cityRepository) {
        $this->cityRepository = $cityRepository;
    }
    
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $faker = Factory::create('fr_FR');

        for($i=0; $i < 1000; $i++) {

            $restaurant = new Restaurant();
            $restaurant->setName( $faker->company );
            $restaurant->setDescription( $faker->text(500) );
            $restaurant->setCity( $this->cityRepository->find( rand(1, 1000) ) );

            $manager->persist($restaurant);
        }

        $manager->flush();
    }
    
    public function getDependencies()
    {
        return array(
            CityFixtures::class,
        );
    }
}
