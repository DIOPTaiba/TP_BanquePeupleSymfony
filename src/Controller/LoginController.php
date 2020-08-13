<?php

namespace App\Controller;

use App\Entity\ResponsableCompte;
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
        extract($_POST);
echo $mot_passe_responsable;
        $entiemanager = $this->getDoctrine()->getManager();
        $resultat = $entiemanager->getRepository(ResponsableCompte::class)->findOneBy(
            ['login' => $login_responsable] ,
            /* ['motDePasse' => $mot_passe_responsable] */);
       
        if ($resultat)
        {
            return $this->redirectToRoute('accueil_responsable');
        }
        else
        {
            $data['error'] = "erreur";
            return $this->redirectToRoute('acueil');
        }

        
    }
}
