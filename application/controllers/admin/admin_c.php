<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_c extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateurs_m');
        //$this->user = ($this->sitemodel->is_logged()) ? $this->sitemodel->get_user($this->session->userdata('lastname')) : false;
    }
    public function index()
    {
        if($this->session->userdata('IDdroit')!=1){
            redirect('utilisateurs_c');
        }
        //modif pour le commit
        $donnees = array(
            'contenu' => "admin/admin_v",
            'listeLieu' => $this->commandes_m->get_dropdown_lieu(),
            'titre' => "gestion des client"
        );
        $this->load->view('template/admin/content',$donnees);
    }

    public function afficher_table(){
        $data = array(
            'contenu' => "admin/admin_v",
            'listeLieu' => $this->commandes_m->get_dropdown_lieu(),
            'lieu' => $this->commandes_m->getTableCmdFromLieu($_POST['nomLieu'])
        );

        $this->load->view('template/admin/content',$data);
    }
}