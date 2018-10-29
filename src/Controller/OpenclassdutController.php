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
     * @Route("/ressources/{id}", name="openclassdut_ressource")
     */
    public function afficherRessourcePeda($id)
    {
        return $this->render('openclassdut/affichageRessource.html.twig',
      ['idRessource' => $id]);
    }
}
