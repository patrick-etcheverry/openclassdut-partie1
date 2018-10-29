<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OpenclassdutController extends AbstractController
{
    /**
     * @Route("/", name="openclassdut_accueil")
     */
    public function index()
    {
        return $this->render('openclassdut/index.html.twig');
    }

    /**
     * @Route("/ressources/345", name="openclassdut_ressource345")
     */
    public function afficherRessourcePeda()
    {
        return $this->render('openclassdut/affichageRessource.html.twig');
    }
}
