<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_c extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateurs_m');
        //$this->user = ($this->sitemodel->is_logged()) ? $this->sitemodel->get_user($this->session->userdata('lastname')) : false;
    }
    public function index()
    {
        /* if($this->session->userdata('droit')!=2){
            redirect('utilisateurs_c');
        } */
        $donnees = array(
            'contenu' => "client/client_v",
            'titre' => "Membre de l\'association"
        );
        $this->load->view('template/client/content',$donnees);
    }
}