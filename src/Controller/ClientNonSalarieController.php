<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientNonSalarie;
use App\Form\ClientNonSalarieType;

class ClientNonSalarieController extends AbstractController
{
    /**
     * @Route("/ClientNonSalarie", name="client_non_salarie")
     */
    public function index()
    {
        $entiemanager = $this->getDoctrine()->getManager();
        
       
        $clientNonSalarie = new ClientNonSalarie();
        $form = $this->createForm(ClientNonSalarieType::class, $clientNonSalarie);

        $data['form'] = $form->createView();
        $data['clientNonSalarie'] = $entiemanager->getRepository(ClientNonSalarie::class)->findAll();
        
        return $this->render('ClientNonSalarie/liste.html.twig', $data);
        
    }

    public function addClientNonSalarie()
    {
        $clientNonSalarie = new ClientNonSalarie();
        
    }
    

}
