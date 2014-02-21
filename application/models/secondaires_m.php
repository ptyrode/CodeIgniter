<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Secondaires_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_categories()
    {
        $q = $this->db->query('select * from categorie');
        //$q = $this->db->select('*')->from('origine')->where('IDorigine',!$ido)->order_by('IDorigine','asc')->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function get_droits()
    {
        $q = $this->db->query('select * from droit');
        //$q = $this->db->select('*')->from('origine')->where('IDorigine',!$ido)->order_by('IDorigine','asc')->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function get_lieux()
    {
        $q = $this->db->query('select * from lieu');
        //$q = $this->db->select('*')->from('origine')->where('IDorigine',!$ido)->order_by('IDorigine','asc')->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function get_origines()
    {
        $q = $this->db->query('select * from origine');
        //$q = $this->db->select('*')->from('origine')->where('IDorigine',!$ido)->order_by('IDorigine','asc')->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function get_semaines()
    {
        $q = $this->db->query('select * from semaine');
        //$q = $this->db->select('*')->from('origine')->where('IDorigine',!$ido)->order_by('IDorigine','asc')->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }


    function get_utilisateurs()
    {
        $q = $this->db->query('select * from utilisateur');
        //$q = $this->db->select('*')->from('origine')->where('IDorigine',!$ido)->order_by('IDorigine','asc')->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function ajout_categorie($categorie)
    {
        $sql = "INSERT INTO categorie VALUES (NULL,\"" . $categorie . "\");";
        $this->db->query($sql);
    }

    function ajout_droit($droit)
    {
        $sql = "INSERT INTO droit VALUES (NULL,\"" . $droit . "\");";
        $this->db->query($sql);
    }

    function ajout_lieu($lieu)
    {
        $sql = "INSERT INTO lieu VALUES (NULL,\"" . $lieu . "\");";
        $this->db->query($sql);
    }

    function ajout_origine($origine)
    {
        $sql = "INSERT INTO origine VALUES (NULL,\"" . $origine . "\");";
        $this->db->query($sql);
    }

    function ajout_semaine($debut, $fin)
    {
        $debut = date('Y-m-d', strtotime($debut));
        $fin = date('Y-m-d', strtotime($fin));
        $sql = "INSERT INTO semaine VALUES (NULL,\"" . $debut . "\",\"" . $fin . "\",1);";
        $this->db->query($sql);
    }

    function ajout_utilisateur()
    {

    }

    public function activer_utilisateur($id)
    {
        $sql = "UPDATE utilisateur SET IDdroit=2 WHERE IDutilisateur=\"" . $id . "\"";
        $this->db->query($sql);
    }

    public function desactiver_utilisateur($id)
    {
        $sql = "UPDATE utilisateur SET IDdroit=3 WHERE IDutilisateur=\"" . $id . "\"";
        $this->db->query($sql);
    }
}