<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateurs_c extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateurs_m');
    }

    public function index()
    {
        if( $this->session->userdata('IDdroit')==1){
            redirect('admin/admin_c');
        }
        if( $this->session->userdata('IDdroit')==2){
            redirect('client/client_c');
        }
        $donnees['titre']="connexion";
        $this->load->view('accueil_v',$donnees);
    }

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
                        'nom'=>$this->input->post('nom'),
                        'email'=>$this->input->post('email'),
                        'passkey'=>$this->input->post('passkey'), //$this->encrypt->encode(  ; md5(
                        'IDdroit'=>1
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
        $this->load->view('inscription_v',$donnees);
    }

    public function connexion()
    {
        if ($this->utilisateurs_m->EST_connecter()){
            redirect('utilisateurs_c/aff_deconnexion');
        }
        $this->form_validation->set_rules('nom','nom','trim|required');
        $this->form_validation->set_rules('passkey','passkey','trim|required');
        /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){
            $donnees= array(
                'nom'=>$this->input->post('nom'),
                'passkey'=>$this->input->post('passkey')
            );
            $donnees_session=array();
            if($this->utilisateurs_m->verif_connexion($donnees,$donnees_session))                          // and valide ==1
            {
                $this->session->set_userdata($donnees_session);
                redirect('utilisateurs_c/connexion');
            }
            else{
                $donnees['erreur']="mot de passe ou login incorrect";
                $donnees['titre']="connexion";
            }
        }
        $donnees['titre']="connexion";
        // fin d'ajout et redirection
        $this->load->view('accueil_v',$donnees);
    }

    public function aff_deconnexion(){
        if( $this->session->userdata('IDdroit')==2){
            redirect('admin/admin_c');
        }
        if( $this->session->userdata('IDdroit')==1){
            redirect('client/client_c');
        }
        print_r($this->session->all_userdata());
        $donnees['titre']="deconnexion";
        $this->load->view('utilisateurs_c',$donnees);
    }

    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect('utilisateurs_c');exit;
    }

    public function mdp_oublie()
    {
        $this->form_validation->set_rules('email','email','trim|required|valid_email');
        /* rappeler la vue à la fin de la méthode */
        if($this->form_validation->run()){
            if($this->utilisateurs_m->test_email($this->input->post('email'))){
                {
                    $donnees= array(
                        'email'=>$this->input->post('email')
                    );
                    $this->email->from('noreply@monsite.com','Mon site');
                    $this->email->to($this->input->post('email'),'mot de passe oublié');
                    $this->email->subject('votre mot de passe');
                    $this->email->message('<p>voici un nouveau de passe </p>....');
                    $this->email->send();
                    // $this->users_m->envoie_email($donnees);
                    // fin d'ajout et redirection
                    redirect(base_url());
                }
            }
            else{
                $donnees['erreur']="cet email n existe ps";
            }

        }
        $donnees['titre']="mot de passe oublié";
        $this->load->view('mdp_oublie_v',$donnees);
    }
}