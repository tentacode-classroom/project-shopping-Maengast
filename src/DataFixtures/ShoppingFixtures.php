<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ShoppingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Car();
        $product->setBrand(1);
        $product->setDescription("Voiture");
        $product->setGearbox(1);

        $manager->persist($product);

        $manager->flush();
    }
}
