<?php

namespace App\DataFixtures;
use App\Entity\Entreprise;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EntrepriseFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $entreprise1 = new Entreprise();
        $entreprise1->setDesignation('entreprise1'); $entreprise2 = new Entreprise();
        $entreprise2->setDesignation('entreprise2'); $entreprise3 = new Entreprise();
        $entreprise3->setDesignation('entreprise3'); $entreprise4 = new Entreprise();
        $entreprise4->setDesignation('entreprise4');


        $manager->persist($entreprise1);
        $manager->persist($entreprise2);
        $manager->persist($entreprise3);
        $manager->persist($entreprise4);

        $manager->flush();


    }
}
