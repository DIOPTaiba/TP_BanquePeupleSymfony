<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    /* public function index()
    {
    $data['message'] = "Bienvenue dans la banque du peuple";
        return $this->render('login/index.html.twig' */ /* , $data utilisé data ou directement le tableau 
    ['controller_name' => 'LoginController',] );
    }*/

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        //Vérifier ici si l'utilisateur existe d'abord
        return $this->redirectToRoute('accueil_responsable');
    }
}
