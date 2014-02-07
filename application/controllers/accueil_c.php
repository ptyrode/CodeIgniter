<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Accueil_c extends CI_Controller {

    public function index()
    {
        $this->load->view('accueil_v');
    }
}

