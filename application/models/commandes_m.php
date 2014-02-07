<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Commandes_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all_cmd() {
        // $q = $this->db->select('*')->from('produit')->order_by('IDproduit','desc')->get();
        $q = $this->db->query("SELECT IDcommande,date_commande,prix_total,IDutilisateur,(select nom from utilisateur where IDutilisateur =commande.IDutilisateur)
        as IDutilisateurDes,IDlieu,(select description from lieu where IDlieu =commande.IDlieu) as IDlieuDes,IDsemaine,(select valide from semaine where IDsemaine = commande.IDsemaine ) as IDsemaineDes from COMMANDE  ");
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }
//    function getuser(){
//        $q = $this->db->query("select nom from utilisateur" );
//
//        return $q->result_array();
//    }
//
//    function getlieu(){
//        $q = $this->db->query('select description from lieu' );
//
//        return $q->result_array();
//    }
//
//    function getsemaine(){
//        $q = $this->db->query('select IDsemaine from semaine' );
//
//        return $q->result_array();
//    }

    function get_dropdown_users()
    {
        $tags = $this->db->query("select distinct IDutilisateur,nom from utilisateur");
        $dropdowns = $tags->result();
        foreach ($dropdowns as $dropdown)
        {
            $dropdownlist[$dropdown->IDutilisateur] = $dropdown->nom;
        }
        $finaldropdown = $dropdownlist;
        return $finaldropdown;
}
    function get_dropdown_lieu()
    {
        $tags = $this->db->query("select distinct IDlieu,description from lieu");
        $dropdowns = $tags->result();
        foreach ($dropdowns as $dropdown)
        {
            $dropdownlist[$dropdown->IDlieu] = $dropdown->description;
        }
        $finaldropdown = $dropdownlist;
        return $finaldropdown;
    }

    function get_dropdown_semaine()
    {
        $tags = $this->db->query("select distinct IDsemaine,valide from semaine");
        $dropdowns = $tags->result();
        foreach ($dropdowns as $dropdown)
        {
            $dropdownlist[$dropdown->IDsemaine] = $dropdown->valide;

        }
        $finaldropdown = $dropdownlist;
        return $finaldropdown;
    }

    function get_all()
    {
        $tags = $this->db->query("select distinct * from produit");
        $dropdowns = $tags->result();
        foreach ($dropdowns as $dropdown)
        {
            $dropdownlist[$dropdown->IDproduit] = $dropdown->designation;

        }
        $finaldropdown = $dropdownlist;
        return $finaldropdown;
    }

    function creer_commande($data,$data2) {
        $this->db->insert('commande', $data);


        $nbid = $this->db->query("SELECT IDcommande FROM commande  ");
        foreach ($nbid->result_array() as $row) //Iterate through results
        {
            $nb = $row['IDcommande'];
        }

        // obtenir prix du produit
        $idproduit = $this->db->query("select prix from produit where produit.IDproduit = ".$data2['IDproduit']);
        foreach ($idproduit->result_array() as $row) //Iterate through results
        {

            $prix = $row['prix'];
        }

        // obtenir type prix du produit
        $tprod = $this->db->query("select type_prix.designation from type_prix,produit where produit.IDtype_prix = type_prix.IDtype_prix and  produit.IDproduit= ".$data2['IDproduit']);
        foreach ($tprod->result_array() as $row) //Iterate through results
        {
            $tp = $tprod->row(1);
            $tp = $row['designation'];
        }

        // insertion dans apour
        $this->db->query("insert into a_pour values (".$nb.",".$data2['IDproduit'].",".$data2['quantite'].",".$prix.",'".$tp."' )");
    }

    function ajouter_a_pour($data){
        $this->db->insert('a_pour', $data);
    }
}
    