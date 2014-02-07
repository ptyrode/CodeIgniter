<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Secondaires_c extends CI_Controller {

    public function index() {
        $data = array(
            'contenu' => "admin/secondaires_v",
            'categories' => $this->secondaires_m->get_categories(),
            'droits' => $this->secondaires_m->get_droits(),
            'lieux' => $this->secondaires_m->get_lieux(),
            'origines' => $this->secondaires_m->get_origines(),
            'semaines' => $this->secondaires_m->get_semaines(),

        );



        $this->load->view('template/admin/content', $data);
    }
}