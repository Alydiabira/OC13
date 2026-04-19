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
                "Savon bio",
                "Savon naturel et écologique.",
                "Un savon artisanal fabriqué à partir d’ingrédients 100% naturels. Idéal pour les peaux sensibles.",
                8.50,
                "savon.jpg"
            ],
            [
                "Gourde en bois",
                "Gourde durable et réutilisable.",
                "Une gourde écologique fabriquée en bois recyclé. Parfaite pour réduire les déchets plastiques.",
                24.90,
                "gourde.jpg"
            ],
            [
                "Shampoing solide",
                "Shampoing écologique sans plastique.",
                "Un shampoing solide hydratant, zéro déchet, adapté à tous types de cheveux.",
                9.90,
                "shampoing.jpg"
            ],
            [
                "Éponge naturelle",
                "Éponge biodégradable.",
                "Éponge 100% naturelle, compostable, idéale pour la cuisine ou la salle de bain.",
                4.50,
                "eponge.jpg"
            ],
            [
                "Kit hygiène recyclé",
                "Kit complet en matériaux recyclés.",
                "Un kit comprenant brosse à dents, savon, gant et pochette en fibres recyclées.",
                18.00,
                "kit.jpg"
            ],
        ];

        foreach ($products as $p) {
            $product = new Product();
            $product->setName($p[0]);
            $product->setShortDescription($p[1]);
            $product->setFullDescription($p[2]);
            $product->setPrice($p[3]);
            $product->setPicture($p[4]);

            $manager->persist($product);
        }

        $manager->flush();
    }
}
