<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateurs_m extends CI_Model
{

    public function add_user($donnees) {
        $sql = "INSERT INTO utilisateur VALUES (NULL,\"".$donnees['nom']."\",\"".$donnees['passkey']."\",\"".$donnees['email']."\"
        ,\"".$donnees['IDdroit']."\");";
        $this->db->query($sql);
    }

    public function verif_connexion($donnees,&$donnees_resultat) {
        $sql = "SELECT IDdroit, nom, email from utilisateur WHERE nom=\"".$donnees['nom']."\"
        and passkey=\"".$donnees['passkey']."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()==1)
        {
            $row=$query->result_array();
            $donnees_resultat=$row[0];
            return true;
        }
        else
            return false;
    }

    function EST_connecter()
    {
        return $this->session->userdata('nom') &&  $this->session->userdata('IDdroit') ;
    }

    public function deconnexion() {
        $this->session->sess_destroy();
        redirect();exit;
    }

    public function test_email($email) {
        $sql = "SELECT email from utilisateur WHERE email=\"".$email."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()>=1)
            return true;
        else
            return false;
    }

    public function test_login($login) {
        $sql = "SELECT nom from utilisateur WHERE nom=\"".$login."\";";
        $query=$this->db->query($sql);
        if($query->num_rows()>=1)
            return true;
        else
            return false;
    }

    public function modifier_mdp($mdp, $email)
    {
        $sql = "UPDATE utilisateur SET passkey=\"" . $mdp . "\" WHERE email=\"" . $email . "\"";
        $this->db->query($sql);
    }
}