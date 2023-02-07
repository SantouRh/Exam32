<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjoutObjet_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {  
		 $data['content']='ajoutObjet';
	     $data['title']='Mes objets';
		$this->load->model('categorie_model');
		$data['categorie'] = $this->categorie_model->_getAllCategorie();
		$this->load->view('templates/index' , $data);		
	}		

	public function insertion() {
		$iduser = $this->session->userData('userid');
		$nom = $this->input->get('nom');
		$description = $this->input->get('description');
		$prix = $this->input->get('prix');
		$categorie = $this->input->get('categorie');
		$photo = $this->input->get('photo');

		$this->load->model('user_model');
		$this->user_model->NewProduct($nom,$categorie,$iduser,$prix,$description);
		
		$content="Acceuil";
		$data['content']="Acceuil";
		$data['categorie'] = $this->categorie_model->_getAllCategorie();
		$this->load->view('templates/index',$data);
	}
}
