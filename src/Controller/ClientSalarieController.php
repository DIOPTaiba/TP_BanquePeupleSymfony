<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientSalarieController extends AbstractController
{
    /**
     * @Route("/ClientSalarie", name="client_salarie")
     */
    public function index()
    {
        return $this->render('ClientSalarie/formulaire.html.twig', [
            'controller_name' => 'InsertClientSalarieController',
        ]);
    }
}
