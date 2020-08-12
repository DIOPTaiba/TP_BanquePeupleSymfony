<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientMoralController extends AbstractController
{
    /**
     * @Route("/ClientMoral", name="client_moral")
     */
    public function index()
    {
        return $this->render('ClientMoral/formulaire.html.twig');
    }
}
