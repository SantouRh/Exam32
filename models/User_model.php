<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    public function _insertUser($mail,$nom,$mdp){
        $sql = "INSERT INTO `utilisateur` (`Email`,`Nom`,`mdp`,`estAdmin`) VALUES (%s,%s,%s,'0')";
        $sql = sprintf($sql,$this->db->escape($mail),$this->db->escape($nom),$this->db->escape($mdp));
        $this->db->query($sql);
    }

    public function _getAllUser() {
        $allUser = array();
        $query = $this->db->query("SELECT * FROM `utilisateur`");
        for ($i=0 ; $i < count($query->result_array()) ; $i++ ) {
            $allUser[$i]['iduser'] = $query->result_array()[$i]['idUtil'];
            $allUser[$i]['email'] = $query->result_array()[$i]['Email'];
            $allUser[$i]['nom'] = $query->result_array()[$i]['Nom'];
            $allUser[$i]['password'] = $query->result_array()[$i]['mdp'];
        }
        return $allUser;
    }

    public function _verifUser($nom,$mdp) {
        $verifier = false;
        $allUser = $this->_getAllUser();
        for($i=0 ; $i < count($allUser) ; $i++) {
            if($nom == $allUser[$i]['nom'] && $mdp == $allUser[$i]['password']) {
                $verifier = $allUser[$i]['iduser'];
                $this->session->set_userData('userid',$verifier);
            } else {
                $verifier = false;
            }
        }
        return $verifier;
    }

    public function newProduct($nomProd,$categorie,$iduser,$prix,$descritpion) {
        $this->load->model('categorie_model');
        $idcategorie = $this->categorie_model->getIdByElement($categorie);

        $sql = "INSERT INTO `Produit`(`nomProd`,`idCateg`,`idUtil`,`Prix`,`Descri`) VALUES (%s,%s,%s,%s,%s)" ;
        $sql = sprintf($sql,$this->db->escape($nomProd),$this->db->escape($idcategorie),$this->db->escape($iduser),$this->db->escape($prix),$this->db->escape($descritpion));
        $this->db->query($sql);
    }
}
?>