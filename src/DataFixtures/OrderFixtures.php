<?php

namespace App\DataFixtures;

use App\Entity\Order;
use App\Entity\OrderItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class OrderFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $user = $this->getReference('user1');
        $product1 = $this->getReference('product1');
        $product2 = $this->getReference('product2');

        $order = new Order();
        $order->setUser($user);
        $order->setCreatedAt(new \DateTimeImmutable('-1 day'));
        $order->setNumber('000456');

        $total = 0;

        // ITEM 1
        $item1 = new OrderItem();
        $item1->setOrderRef($order);
        $item1->setProduct($product1);
        $item1->setQuantity(2);
        $item1->setPrice($product1->getPrice());
        $item1->setTotal($product1->getPrice() * 2);
        $total += $item1->getTotal();
        $manager->persist($item1);

        // ITEM 2
        $item2 = new OrderItem();
        $item2->setOrderRef($order);
        $item2->setProduct($product2);
        $item2->setQuantity(1);
        $item2->setPrice($product2->getPrice());
        $item2->setTotal($product2->getPrice());
        $total += $item2->getTotal();
        $manager->persist($item2);

        $order->setTotalPrice($total);
        $manager->persist($order);

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
