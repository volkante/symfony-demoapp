<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product;
        $product->setName("Product ONe");
        $product->setDescription("This is the best product");
        $product->setSize(100);

        $manager->persist($product);

        $product = new Product;
        $product->setName("Product Two");
        $product->setDescription("A very bad product");
        $product->setSize(200);

        $manager->persist($product);

        $manager->flush();
    }
}
