<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_c extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_m');
        //$this->user = ($this->sitemodel->is_logged()) ? $this->sitemodel->get_user($this->session->userdata('lastname')) : false;
    }
    public function index()
    {
        if($this->session->userdata('droit')!=1){
            redirect('user_c');
        }
        $donnees['titre']="Membre de l\'association";
        $this->load->view('clients/client_index',$donnees);
    }
}