<?php

namespace App\DataFixtures;

use App\Entity\Cart;
use App\Entity\CartItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CartFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $user = $this->getReference('user1');

        $cart = new Cart();
        $cart->setUser($user);
        $manager->persist($cart);

        // Ajout de 3 produits aléatoires
        for ($i = 1; $i <= 3; $i++) {
            $product = $this->getReference('product' . rand(1, 10));

            $item = new CartItem();
            $item->setCart($cart);
            $item->setProduct($product);
            $item->setQuantity(rand(1, 3));

            $manager->persist($item);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            ProductFixtures::class
        ];
    }
}
