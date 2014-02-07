<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateurs_m extends CI_Model
{

    public function add_user($donnees)
    {
        $sql = "INSERT utilisateur VALUES (NULL,\"".$donnees['nom']."\",\"".$donnees['pass']."\",\"".$donnees['email']."\"
        ,1) ;";
        $this->db->query($sql);
    }

    function login($nom, $passkey)
    {
        $this -> db -> select('IDutilisateur, nom, passkey, IDdroit');
        $this -> db -> from('utilisateur');
        $this -> db -> where('nom', $nom);
        $this -> db -> where('passkey', $passkey);
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }


    function EST_connecter()
    {
        return $this->session->userdata('login') &&  $this->session->userdata('droit') ;
    }

    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect();exit;
    }
    public function test_email($email)
    {
        $sql = "SELECT email from utilisateur WHERE email=\"".$email."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()>=1)
            return true;
        else
            return false;
    }
    public function test_login($login)
    {
        $sql = "SELECT nom from utilisateur WHERE nom=\"".$login."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()>=1)
            return true;
        else
            return false;
    }
}






