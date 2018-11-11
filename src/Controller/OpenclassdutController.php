<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ressource;

class OpenclassdutController extends AbstractController
{
    /**
     * @Route("/", name="openclassdut_accueil")
     */
    public function index()
    {
       // Récupérer le repository de l'entité Ressource
       $repositoryRessource = $this->getDoctrine()->getRepository(Ressource::class);

       // Récupérer les ressources enregistrées en BD
       $ressources = $repositoryRessource->findAll();

       // Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('openclassdut/index.html.twig',['ressources'=>$ressources]);
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
