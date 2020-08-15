<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientNonSalarie;
use App\Entity\Clients;
use App\Entity\CompteBloque;
use App\Entity\CompteEpargne;
use App\Entity\Comptes;
use App\Entity\EtatCompte;
use App\Entity\ResponsableCompte;
use App\Form\ClientNonSalarieType;
use Symfony\Component\HttpFoundation\Request;

class ClientNonSalarieController extends AbstractController
{
    /**
     * @Route("/ClientNonSalarie/liste", name="liste_client_non_salarie")
     */
    public function index()
    {
        $entitymanager = $this->getDoctrine()->getManager();
        
       //Pour gérer les formulaire générés
        /* $clientNonSalarie = new ClientNonSalarie();
        $form = $this->createForm(ClientNonSalarieType::class, $clientNonSalarie, array('action' => $this->generateUrl('add_client_non_salarie')));

        $data['form'] = $form->createView(); */
        $data['clientNonSalarie'] = $entitymanager->getRepository(ClientNonSalarie::class)->findAll();
        
        return $this->render('ClientNonSalarie/liste.html.twig', $data);
        
    }

    /**
     * @Route("/ClientNonSalarie/add", name="add_client_non_salarie")
     */
    public function addClientNonSalarie(Request $request)
    {
        /* $clientNonSalarie = new ClientNonSalarie();

        $form = $this->createForm(TaskType::class, $clientNonSalarie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$clientNonSalarie` variable has also been updated
            $clientNonSalarie = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($clientNonSalarie);
            $entityManager->flush();

            return $this->redirectToRoute('liste_client_non_salarie');
        } */

        extract($_POST);
        $entitymanager = $this->getDoctrine()->getManager();
        $id_responsable = 1;
        $client = new Clients();
        
        $responsable_compte = $entitymanager->getRepository(ResponsableCompte::class)->find($id_responsable);

        $client->setAdresse($adresse);
        $client->setTelephone($telephone);
        $client->setEmail($email);
        $client->setTypeClient($type_client);
        $client->setDateInscription(new \DateTime());
        $client->setResponsableCompte($responsable_compte);
 
        $entitymanager->persist($client);
	    $entitymanager->flush();
        
       
        $clientnonsalarie = new ClientNonSalarie();
 
        $clientnonsalarie->setNom($nom);
        $clientnonsalarie->setPrenom($prenom);
        $clientnonsalarie->setCarteIdentite($carte_identite);
        $clientnonsalarie->setClient($client);
 
        $entitymanager->persist($clientnonsalarie);
        $entitymanager->flush();


        $compte = new Comptes();
        $compte->setNumeroCompte($numero_compte);
        $compte->setCleRib($cle_rib);
        $compte->setSolde($solde);
        $compte->setDateOuverture(new \DateTime());
        $compte->setNumeroAgence($numero_agence);
        $compte->setClient($client);
 
        $entitymanager->persist($compte);
        $entitymanager->flush();

        
        $etatcompte = new EtatCompte();
        $etatcompte->setEtatCompte("actif");
        $etatcompte->setDateChangementEtat(new \DateTime());
        $etatcompte->addCompte($compte);
 
        $entitymanager->persist($etatcompte);
        $entitymanager->flush();

        //Vérification du type de compte à ajouter
        if($type_compte == 'compte epargne')
        {

            $compte_epargne = new CompteEpargne();
            $compte_epargne->setFraisOuverture($frais_ouverture);
            $compte_epargne->setMontantRenumeration($montant_remuneration);
            $compte_epargne->setCompte($compte);

            $entitymanager->persist($compte_epargne);
            $entitymanager->flush();
        }
        else
        {
            $compte_bloque = new CompteBloque();
            $compte_bloque->setFraisOuverture($frais_ouverture);
            $compte_bloque->setMontantRenumeration($montant_remuneration);
            $compte_bloque->setDureeBlocage($duree_blocage);
            $compte_bloque->setCompte($compte);

            $entitymanager->persist($compte_bloque);
            $entitymanager->flush();
        }
        
        return $this->redirectToRoute('liste_client_non_salarie');
            
    }
    /**
     * @Route("/ClientNonSalarie/existant", name="recherche_client_non_salarie")
     */
    public function rechercheClientNonSalarie()
    {
        return $this->render('ClientNonSalarie/existant.html.twig');
    }
    

}
