<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\DBAL\Driver\IBMDB2\Exception\Factory;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        for ($p=0; $p < 100; $p++) { 
            $product = new Product;
            $product->setName($faker->sentence())
            ->setPrice(mt_rand(100, 200))
            ->setSlug(($faker->slug()));

            $manager->persist($product);

        }

        $manager->flush();
    }
}
