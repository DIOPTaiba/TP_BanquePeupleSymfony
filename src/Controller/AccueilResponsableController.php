<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilResponsableController extends AbstractController
{
    /**
     * @Route("/AccueilResponsable", name="accueil_responsable")
     */
    public function index()
    {
        return $this->render('AccueilResponsable/choixTypeCompte.html.twig', [
            'controller_name' => 'Bienvenue !',
        ]);
    }
}
