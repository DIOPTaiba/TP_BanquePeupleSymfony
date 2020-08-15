<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Entity\ClientSalarie;
use App\Entity\CompteBloque;
use App\Entity\CompteCourant;
use App\Entity\CompteEpargne;
use App\Entity\Comptes;
use App\Entity\EtatCompte;
use App\Entity\ResponsableCompte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ClientSalarieController extends AbstractController
{
    /**
     * @Route("/ClientSalarie/liste", name="liste_client_salarie")
     */
    public function index()
    {
        $entitymanager = $this->getDoctrine()->getManager();
        
        $data['clientSalarie'] = $entitymanager->getRepository(ClientSalarie::class)->findAll();
        
        return $this->render('ClientSalarie/liste.html.twig', $data);
        
    }

    /**
     * @Route("/ClientSalarie/add", name="add_client_salarie")
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
        
       
        $clientSalarie = new ClientSalarie();
 
        $clientSalarie->setNom($nom);
        $clientSalarie->setPrenom($prenom);
        $clientSalarie->setCarteIdentite($carte_identite);
        $clientSalarie->setProfession($profession);
        $clientSalarie->setSalaire($salaire);
        $clientSalarie->setNomEmployeur($nom_employeur);
        $clientSalarie->setAdresseEntreprise($adresse_entreprise);
        $clientSalarie->setRaisonSocial($raison_social);
        $clientSalarie->setIdentifiantEntreprise($identifiant_entreprise);
        $clientSalarie->setClient($client);
 
        $entitymanager->persist($clientSalarie);
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
        
        return $this->redirectToRoute('liste_client_salarie');
            
    }
    /**
     * @Route("/ClientSalarie/existant", name="recherche_client_salarie")
     */
    public function rechercheClientSalarie()
    {
        return $this->render('ClientSalarie/existant.html.twig');
    }
}
