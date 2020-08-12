<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientNonSalarieController extends AbstractController
{
    /**
     * @Route("/ClientNonSalarie", name="client_non_salarie")
     */
    public function index()
    {
        return $this->render('ClientNonSalarie/formulaire.html.twig');
    }
}
