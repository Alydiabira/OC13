<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $products = [
            [
                'name' => 'Savon bio au thé vert',
                'short' => 'Un savon artisanal fabriqué à partir d’ingrédients 100% naturels.',
                'full' => 'Ce savon biologique au thé vert est fabriqué à la main en France. Il hydrate la peau tout en respectant l’environnement. Sans parfum artificiel, sans colorant, sans huile de palme.',
                'price' => 6.90,
                'picture' => '/images/products/savon-the-vert.jpg',
            ],
            [
                'name' => 'Infusion detox citron & gingembre',
                'short' => 'Une infusion bio parfaite pour purifier l’organisme.',
                'full' => 'Mélange biologique de citron, gingembre et plantes aromatiques. Idéal pour une pause bien-être. Sachets compostables et emballage recyclable.',
                'price' => 4.50,
                'picture' => '/images/products/infusion-detox.jpg',
            ],
            [
                'name' => 'Sac réutilisable en coton bio',
                'short' => 'Un sac durable pour vos courses du quotidien.',
                'full' => 'Sac en coton biologique certifié GOTS. Résistant, lavable et réutilisable. Une alternative écologique aux sacs plastiques.',
                'price' => 9.90,
                'picture' => '/images/products/sac-coton-bio.jpg',
            ],
        ];

        foreach ($products as $data) {
            $product = new Product();
            $product->setName($data['name']);
            $product->setShortDescription($data['short']);
            $product->setFullDescription($data['full']);
            $product->setPrice($data['price']);
            $product->setPicture($data['picture']);

            $manager->persist($product);
        }

        $manager->flush();
    }
}
