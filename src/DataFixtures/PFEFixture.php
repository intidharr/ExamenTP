<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\PFE;
class PFEFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $PFE1 = new PFE();
        $PFE1->setTitle('TITRE1');
        $PFE1->setStudent('nom1');


        $PFE2 = new PFE();
        $PFE2->setTitle('TITRE2');
        $PFE2->setStudent('nom2');
        $PFE3 = new PFE();
        $PFE3->setTitle('TITRE3');
        $PFE3->setStudent('nom3');
        $PFE4 = new PFE();
        $PFE4->setTitle('TITRE4');
        $PFE4->setStudent('nom4');
        $PFE5 = new PFE();
        $PFE5->setTitle('TITRE5');
        $PFE5->setStudent('nom5');
        $PFE6 = new PFE();
        $PFE6->setTitle('TITRE6');
        $PFE6->setStudent('nom6');




        $manager->persist($PFE1);
        $manager->persist($PFE2);
        $manager->persist($PFE3);
        $manager->persist($PFE4);
        $manager->persist($PFE5);
        $manager->persist($PFE6);



        $manager->flush();
    }
}
