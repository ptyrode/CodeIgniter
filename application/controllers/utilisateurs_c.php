<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Utilisateurs_c extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateurs_m','',TRUE);
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nom', 'nom', 'trim|required|xss_clean');
        $this->form_validation->set_rules('passkey', 'passkey', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.&nbsp; User redirected to login page
            $this->load->view('accueil_v');
        }
        else
        {
            //Go to private area
            if($this->session->userdata('logged_in'))
            {
                $session_data = $this->session->userdata('logged_in');
                $data['nom'] = $session_data['nom'];
                $data['IDdroit'] = $session_data['IDdroit'];
                if($data['IDdroit']==1)
                    redirect('slider_c', 'refresh');
                    //$this->load->view('produits/admin/produits_v', $data);
                else
                    redirect('slider_c', 'refresh');
                    //$this->load->view('produits/client/produits_v', $data);
            }
            else
            {
                //If no session, redirect to login page
                redirect('accueil_c', 'refresh');
            }
        }

    }

    function check_database($passkey)
    {
        //Field validation succeeded.&nbsp; Validate against database
        $nom = $this->input->post('nom');

        //query the database
        $result = $this->utilisateurs_m->login($nom, $passkey);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'IDutilisateur' => $row->IDutilisateur,
                    'IDdroit' => $row->IDdroit,
                    'nom' => $row->nom
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

//    function deconnexion()
//    {
//        $this->session->unset_userdata('logged_in');
//        session_destroy();
//        redirect('accueil_c', 'refresh');
//    }

    public function inscription()
    {

        $this->form_validation->set_rules('login','login','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('pass','Mot de passe','trim|required|matches[pass2]');
        $this->form_validation->set_rules('pass2','Mot de passe','trim|required');
        /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){
            if(! $this->utilisateurs_m->test_email($this->input->post('email'))){
                if(! $this->utilisateurs_m->test_login($this->input->post('login'))){
                    $donnees= array(
                        'nom'=>$this->input->post('login'),
                        'email'=>$this->input->post('email'),
                        'pass'=>$this->input->post('pass'), //$this->encrypt->encode(  ; md5(
                        'droit'=>1,
                        'valide'=>0
                    );
                    $this->utilisateurs_m->add_user($donnees);
                    // fin d'ajout et redirection
                    redirect(base_url());
                }
                else{
                    $donnees['erreur']="ce login existe déjà";
                }
            }
            else{
                $donnees['erreur']="cet email existe déjà";
            }

        }
        $donnees['titre']="inscription";
        $this->load->view('users_inscription',$donnees);
    }
    public function aff_connexion()
    {
        if ($this->users_m->EST_connecter()){
            redirect('utilisateurs_c/aff_deconnexion');
        }
        $this->form_validation->set_rules('login','login','trim|required');
        $this->form_validation->set_rules('pass','Mot de passe','trim|required');
        /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){
            $donnees= array(
                'login'=>$this->input->post('login'),
                'pass'=>$this->input->post('pass')
            );
            $donnees_session=array();
            if($this->users_m->verif_connexion($donnees,$donnees_session))                          // and valide ==1
            {
                $this->session->set_userdata($donnees_session);
                redirect('utilisateurs_c/aff_connexion');
            }
            else{
                $donnees['erreur']="mot de passe ou login incorrect";
                $donnees['titre']="connexion";
            }
        }
        $donnees['titre']="connexion";
        // fin d'ajout et redirection
        $this->load->view('users_index',$donnees);
    }

    public function aff_deconnexion(){
        if( $this->session->userdata('droit')==2){
            redirect('admin_c');
        }
        if( $this->session->userdata('droit')==1){
            redirect('client_c');
        }
        print_r($this->session->all_userdata());
        $donnees['titre']="deconnexion";
        $this->load->view('users_index',$donnees);
    }
    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect('utilisateurs_c');exit;
    }
    public function mdp_oublie()
    {
        $this->load->library('email');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){


            if($this->utilisateurs_m->test_email($_POST['email'])){
                {
                    $donnees= array(
                        'email'=>$_POST['email']
                    );


                    $this->email->from('noreply@monsite.com','Mon site');
                    $this->email->to($_POST['email']);
                    $this->email->subject('votre mot de passe');
                    $this->email->message('<p>voici un nouveau de passe </p>....');
                    $this->email->send();
                    // $this->users_m->envoie_email($donnees);
                    // fin d'ajout et redirection
                    redirect(base_url());
                }
            }
            else{
                $donnees['erreur']="Cet email n'existe pas";
            }

        }
        $donnees['titre']="Mot de passe oublié";
        $this->load->view('users_mdp_oublie',$donnees);
    }


}

