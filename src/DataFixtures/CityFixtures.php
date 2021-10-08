<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\City;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 1000; $i++) {
            $city = new City();
            $city->setName( $faker->city );
            $city->setZipcode( $faker->postcode );
            
            $manager->persist($city);
        }
        $manager->flush();
    }
}
