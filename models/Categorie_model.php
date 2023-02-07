<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categorie_model extends CI_Model {

    public function NewCategorie($categorie) {
        $sql = "INSERT INTO Categorie('categorie') VALUES ('%s')";
        $sql = sprintf($sql,$this->db->escape($categorie));
        $this->db->query($sql);
    }

    public function _getAllCategorie() {
        $allCategorie = array();
        $query = $this->db->query("SELECT * FROM categorie");
        for ($i=0 ; $i < count($query->result_array()) ; $i++ ) {
            $allCaegorie[$i]['idcategorie'] = $query->result_array()[$i]['idCategorie'];
            $allCaegorie[$i]['nom'] = $query->result_array()[$i]['categorie'];
        }
        return $allCaegorie;
    }

    public function getIdByElement($cate) {
        $allCategorie = $this->_getAllCategorie(); 
        for ($i=0; $i < count($allCategorie); $i++) { 
            if ($cate == $allCategorie[$i]['nom']) {
                $idCategorie = $allCategorie[$i]['idcategorie'];
            }
        }
        return $idCategorie;
    }
}

?>