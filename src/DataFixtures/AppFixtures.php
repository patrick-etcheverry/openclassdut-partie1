<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Module;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $moduleM1102 = new Module();
        $moduleM1102->setCode("M1102");
        $moduleM1102->setTitre("Initiation à l'algorithmique");
        $moduleM1102->setSemestre(1);
        $manager->persist($moduleM1102);

        $manager->flush();
    }
}
