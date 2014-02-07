<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slider_c extends CI_Controller {

    public function index() {
            $data = array(
                'contenu' => "slider/slider_v",

            );


        $this->load->view('template/client/content', $data);
    }
}