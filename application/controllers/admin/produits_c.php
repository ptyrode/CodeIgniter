<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produits_c extends CI_Controller {

    public function index() {


            $data['contenu'] = "produits_v";
            $data['produits'] = $this->produits_m->get_all();



        $this->load->view('template/admin/content', $data);
    }

    public function modif_produit($id,$idtp,$ido,$idc) {
        $data = array(
            'contenu' => "admin/produit_v",
            'produits' => $this->produits_m->get_unproduit($id),
            'type_prix' =>$this->produits_m->gettypeprix($idtp),
            'origine' => $this->produits_m->getorigine($ido),
            'categorie' => $this->produits_m->getcategorie($idc)

        );

        
        $this->load->view('template/admin/content', $data);
    }

    public function suppr_produit($id){


        $this->produits_m->suppr_produit($id);
        $this->index();
    }

    
    public function update_produit() {
        $data = array(
            'IDproduit' => $_POST['idprod'],
            'designation' => $_POST['designation'],
            'commentaire' => $_POST['commentaire'],
            'prix' => $_POST['prix'],
            'code_produit' => $_POST['codePro'],
            'disponible' => $_POST['dispo'],
            'IDtype_prix' => $_POST['typePrix'],
            'IDorigine' => $_POST['origine'],
            'IDcategorie' => $_POST['categorie']
        );
        print_r($data);
        $this->produits_m->update_produit($data);
        
        $this->index();
    }   



    public function creer_produit() {
        $data = array(
          'contenu' => "admin/creer_produit_v",
          'type_prix' =>$this->produits_m->gettypeprixall(),
          'origine' => $this->produits_m->getorigineall(),
          'categorie' => $this->produits_m->getcategorieall()
        );


        $this->load->view('template/admin/content', $data);
    }
    
    public function ajouter_produit() {
        $data = array(
            'IDproduit' => null,
            'designation' => $_POST['designation'],
            'commentaire' => $_POST['commentaire'],
            'prix' => $_POST['prix'],
            'code_produit' => $_POST['codeproduit'],
            'disponible' => $_POST['disponible'],
            'IDtype_prix' => $_POST['idtypeprix'],
            'IDorigine' => $_POST['idorigine'],
            'IDcategorie' => $_POST['idcategorie']
        );
        
        $this->produits_m->creer_produit($data);
        
        $this->index();
    }
}
