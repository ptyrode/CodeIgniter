<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_c extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_m');
        //$this->user = ($this->sitemodel->is_logged()) ? $this->sitemodel->get_user($this->session->userdata('lastname')) : false;
    }
    public function index()
    {
        if($this->session->userdata('droit')!=2){
            redirect('user_c');
        }
        $donnees['titre']="gestion des clients";
        $this->load->view('admin/admin_index',$donnees);
    }
}