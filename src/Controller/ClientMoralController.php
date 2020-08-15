<?php

namespace App\Controller;

use App\Entity\ClientMoral;
use App\Entity\Clients;
use App\Entity\CompteBloque;
use App\Entity\CompteCourant;
use App\Entity\CompteEpargne;
use App\Entity\Comptes;
use App\Entity\EtatCompte;
use App\Entity\ResponsableCompte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ClientMoralController extends AbstractController
{
    /**
     * @Route("/ClientMoral/liste", name="liste_client_moral")
     */
    public function index()
    {
        $entitymanager = $this->getDoctrine()->getManager();
        
        $data['clientMoral'] = $entitymanager->getRepository(ClientMoral::class)->findAll();
        
        return $this->render('ClientMoral/liste.html.twig', $data);
        
    }

    /**
     * @Route("/ClientMoral/add", name="add_client_moral")
     */
    public function addClientSalarie(Request $request)
    {
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
        
       
        $clientMoral = new ClientMoral();
 
        $clientMoral->setNomEntreprise($nom_entreprise);
        $clientMoral->setIdentifiantEntreprise($identifiant_entreprise);
        $clientMoral->setRaisonSocial($raison_social);
        $clientMoral->setClient($client);
 
        $entitymanager->persist($clientMoral);
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
        else if ($type_compte == 'compte courant')
        {
            $compte_courant = new CompteCourant();
            $compte_courant->setAgios($agios);
            $compte_courant->setCompte($compte);

            $entitymanager->persist($compte_courant);
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
        
        return $this->redirectToRoute('liste_client_moral');
            
    }
    /**
     * @Route("/ClientMoral/existant", name="recherche_client_moral")
     */
    public function rechercheClientMoral()
    {
        return $this->render('ClientMoral/existant.html.twig');
    }
}
