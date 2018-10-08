<?php

namespace App\DataFixtures;

use App\Entity\Car;
use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ShoppingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $brand = new Brand();
        $brand->setName("Porsche");
        $manager->persist($brand);


        $product = new Car();
        $product->setBrand($brand);
        $product->setDescription("Voiture");
        $product->setGearbox(1);

        $manager->persist($product);

        $manager->flush();
    }
}
