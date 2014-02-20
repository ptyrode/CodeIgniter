<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produits_c extends CI_Controller {

    public function index() {


            $data['contenu'] = "produits_v";
            $data['nomUtil'] = $this->session->all_userdata();
            $data['produits'] = $this->produits_m->get_all();


        $this->load->view('template/client/content', $data);
    }






}
