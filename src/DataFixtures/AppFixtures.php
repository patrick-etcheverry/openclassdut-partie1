<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Module;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Création d'un générateur de données avec la librairie Faker
        $faker = \Faker\Factory::create('fr_FR');
        $nbModules = 15;
        for ($i=1; $i <= $nbModules; $i++) {
            // Création d'un nouveau module
            $module = new Module();
            // Génération d'un numéro de semestre compris entre 1 et 4
            $numSemestre = $faker->numberBetween($min = 1, $max = 4);
            // Définition du code du semestre
            $module->setCode($faker->regexify('M'.$numSemestre.'[1-2]0[1-6]'));
            // Définition du titre du semestre
            $module->setTitre($faker->sentence($nbWords = 6, $variableNbWords = true));
            // Définition du numéro du semestre
            $module->setSemestre($numSemestre);
            // Enregistrement du module créé
            $manager->persist($module);
        }
        // Envoyer en BD tous les objets persistés
        $manager->flush();
    }
}
