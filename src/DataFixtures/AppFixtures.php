<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("Savon bio");
        $product->setShortDescription("Savon naturel");
        $product->setFullDescription("Savon naturel fabriqué à la main...");
        $product->setPrice(9.90);
        $product->setPicture("savon.jpg");
        $manager->persist($product);

        $manager->flush();
    }
}
