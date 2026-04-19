<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 1; $i <= 10; $i++) {
            $product = new Product();
            $product->setName($faker->words(3, true));
            $product->setShortDescription($faker->sentence());
            $product->setFullDescription($faker->paragraph());
            $product->setPrice($faker->randomFloat(2, 5, 50));
            $product->setPicture("product$i.jpg");

            $manager->persist($product);

            // Références pour CartFixtures et OrderFixtures
            $this->addReference("product$i", $product);
        }

        $manager->flush();
    }
}
