<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produits_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function get_all() {
       // $q = $this->db->select('*')->from('produit')->order_by('IDproduit','desc')->get();
        $q = $this->db->query("SELECT IDproduit,designation,commentaire,prix,code_produit,disponible,IDtype_prix,(select designation
        from up_type_prix where IDtype_prix = up_produit.IDtype_prix) as IDtype_prixDes, IDorigine,(select description from up_origine where IDorigine =up_produit.IDorigine)
        as IDorigineDes,IDcategorie,(select description from up_categorie where IDcategorie = up_produit.IDcategorie) as IDcategorieDes FROM up_produit ");
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }
    function getorigine($ido){
        $q = $this->db->query('select * from up_origine where IDorigine !='.$ido);
        //$q = $this->db->select('*')->from('origine')->where('IDorigine',!$ido)->order_by('IDorigine','asc')->get();
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function getcategorie($idc){
        $q = $this->db->query('select * from up_categorie where IDcategorie !='.$idc);
        //$q = $this->db->select('*')->from('categorie')->where('IDcategorie',!$idc)->order_by('IDcategorie','asc')->get();
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function gettypeprix($idtp){
        $q = $this->db->query('select * from up_type_prix where IDtype_prix !='.$idtp);
        //$q = $this->db->select('*')->from('type_prix')->where('IDtype_prix',!$idtp)->order_by('IDtype_prix','asc')->get();
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function getorigineall(){

        $q = $this->db->select('*')->from('up_origine')->order_by('IDorigine','asc')->get();
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function getcategorieall(){
        $q = $this->db->select('*')->from('up_categorie')->order_by('IDcategorie','asc')->get();
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function gettypeprixall(){
        $q = $this->db->select('*')->from('up_type_prix')->order_by('IDtype_prix','asc')->get();
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }

    function get_unproduit($id) {
        //$q = $this->db->select('')->from('produit')->where('IDproduit', $id)->get();

        $q = $this->db->query("SELECT IDproduit,designation,commentaire,prix,code_produit,disponible,IDtype_prix,(select designation
        from up_type_prix where IDtype_prix = up_produit.IDtype_prix) as IDtype_prixDes, IDorigine,(select description from up_origine where IDorigine =up_produit.IDorigine)
        as IDorigineDes,IDcategorie,(select description from up_categorie where IDcategorie = up_produit.IDcategorie) as IDcategorieDes FROM up_produit WHERE IDproduit=$id");



        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    function update_produit($data) {
        $this->db->where('IDproduit', $data['IDproduit']);
        $this->db->update('up_produit', $data);
    }
    
    function creer_produit($data) {
        $this->db->insert('up_produit', $data);
    }

    function suppr_produit($id){
        $this->db->query("delete from up_produit where IDproduit=$id ");

    }
}
