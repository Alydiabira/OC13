<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Savon bio');
        $product->setShortDescription('Savon naturel');
        $product->setFullDescription('Savon naturel fabriqué en France');
        $product->setPrice(6.90);
        $product->setPicture('savon.jpg');

        $manager->persist($product);

        $manager->flush();
    }
}
