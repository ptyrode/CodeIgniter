<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Commandes_c extends CI_Controller {

    public function index() {
        $data['contenu'] = "admin/commande_v";
        $data['commandes'] = $this->commandes_m->get_all_cmd();



        $this->load->view('template/admin/content', $data);
    }

    public function nouvelle_commande($r){

        $ville = "belfort";

        /*if(date("N") < 3){
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
        } */ // A activer pour mettre en place le systeme de semaine (ne pas supprimer)

        $data = array(
            'contenu' => "client/nvl_commande_v",
            'users' => $this->commandes_m->get_dropdown_users(),
            'lieu' => $this->commandes_m->get_dropdown_lieu(),
            'semaine' => $this->commandes_m->get_dropdown_semaine(),
            'produits'=> $this->commandes_m->get_all(),
            'nomUtil'=> $this->session->all_userdata(),
            'idprod' => $r

        );

        $data2 = array(
            'idprod' => $r
        );
       // $data2['idprod'] = $r;
        $this->load->helper('form');
        $this->load->view('template/client/content', $data,$data2);

    }

    public function verif_semaine(){
        $semaine = $_POST['idsemaine'];
        $isValid = $this->commandes_m->verifier_semaine($semaine);

        if($isValid == 1){
            $this->ajouter_commande();
        }else if($isValid == 0){
            $this->mauvaise_semaine();
        }else{
            echo("c'est mort");
        }
    }


    public function ajouter_commande() {
//        $this->output->enable_profiler(TRUE);

        $semaine = $_POST['idsemaine'];


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
        $this->commandes_m->creer_commande($semaine,$data,$data2);


        //$this->creer_a_pour();
        $data = array(
            'contenu' => "client/client_v"
        );
        $this->load->view('template/client/content', $data);

    }

    public function mauvaise_semaine(){
        $this->index();
    }

    public function cmd_utilisateur($nomUser){
        $data = array(
            'contenu' => "client/commandes_perso_v",
            'commandes'=> $this->commandes_m->get_all_cmd_from_user($nomUser)
        );
    }
    //public function creer_a_pour(){

   // }
}