<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $hasher
    ) {}

    public function load(ObjectManager $manager): void
    {
        // Utilisateur 1
        $user1 = new User();
        $user1->setEmail('user1@example.com');
        $user1->setFirstname('Aly');
        $user1->setLastname('Diabira');
        $user1->setApiEnabled(true);
        $user1->setPassword($this->hasher->hashPassword($user1, 'password'));
        $manager->persist($user1);

        // Utilisateur 2
        $user2 = new User();
        $user2->setEmail('user2@example.com');
        $user2->setFirstname('Marie');
        $user2->setLastname('Durand');
        $user2->setApiEnabled(false);
        $user2->setPassword($this->hasher->hashPassword($user2, 'password'));
        $manager->persist($user2);

        $manager->flush();

        // Références pour les autres fixtures
        $this->addReference('user1', $user1);
        $this->addReference('user2', $user2);
    }
}
