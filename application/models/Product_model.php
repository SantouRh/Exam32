<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function getAllProducts($idU)
	{   
		//$this->load->database();
		$query = $this->db->query("select * from produit where idUtil='".$idU."'");
		$resultat = array();
		foreach ($query->result_array() as $row)
		{
			array_push($resultat, $row); 
		        // $row->title;
		        // $row->name;
		        // $row->body;
		}
		$data = array();
		$data['resultat'] = $resultat; 
		return $resultat;
	}		
}
?>