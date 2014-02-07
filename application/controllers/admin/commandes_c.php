<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Commandes_c extends CI_Controller {

    public function index() {
        $data['contenu'] = "admin/commande_v";
        $data['commandes'] = $this->commandes_m->get_all_cmd();



        $this->load->view('template/admin/content', $data);
    }

    public function nouvelle_commande(){
        $ville = "belfort";

        if(date("N") < 3){
            $data = array(
                'contenu' => "client/nvl_commande_v",
                'users' => $this->commandes_m->get_dropdown_users(),
                'lieu' => $this->commandes_m->get_dropdown_lieu(),
                'semaine' => $this->commandes_m->get_dropdown_semaine(),
                'produits'=> $this->commandes_m->get_all()

            );}
        elseif(date("N")==3){

                //si belfort et si 20h au plus tard
                 if(($ville = "belfort") && (date("G")<= 20)){
                    $data = array(
                        'contenu' => "client/nvl_commande_v",
                        'utilisateur' =>$this->produits_m->getuser(),
                        'lieu' => $this->produits_m->getlieu(),
                        'semaine' => $this->produits_m->getsemaine()
                    );
                }else
                    // si sochaux et 10h au plus tard
                    if(($ville = "sochaux") && (date("G")<= 10)){
                        $data = array(
                            'contenu' => "client/nvl_commande_v",
                            'utilisateur' =>$this->produits_m->getuser(),
                            'lieu' => $this->produits_m->getlieu(),
                            'semaine' => $this->produits_m->getsemaine()

                    );
                }else{
                    $data = array('contenu' => "client/delai_depasse");
                }
        }

        $data = array(
            'contenu' => "client/nvl_commande_v",
            'users' => $this->commandes_m->get_dropdown_users(),
            'lieu' => $this->commandes_m->get_dropdown_lieu(),
            'semaine' => $this->commandes_m->get_dropdown_semaine(),
            'produits'=> $this->commandes_m->get_all()

        );
        $this->load->helper('form');
        $this->load->view('template/admin/content', $data);

    }



    public function ajouter_commande() {
//        $this->output->enable_profiler(TRUE);

        $data = array(
            'IDcommande' => null,
            'date_commande' => $_POST['datecommande'],
            'prix_total' => $_POST['prixtotal'],
            'IDutilisateur' => $_POST['iduser'],
            'IDlieu' => $_POST['idlieu'],
            'IDsemaine' => $_POST['idsemaine']


        );

        $data2 = array(
            'IDproduit' => $_POST['idprod'],
            'quantite' => $_POST['qte']

        );
        $this->commandes_m->creer_commande($data,$data2);


        //$this->creer_a_pour();


        $this->index();
    }

    //public function creer_a_pour(){

   // }
}