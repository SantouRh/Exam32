<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

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

	public function insertion() { 
        $email = $this->input->get('mail'); 
		$nom = $this->input->get('nom');
        $password = $this->input->get('pass');
        
        $this->load->model('user_model');
        $this->user_model->_insertUser($email,$nom,$password);
        $this->load->view('login');
	}		

    public function entrerUser() {
        $nom = $this->input->get('username');
        $pass = $this->input->get('password');

        $this->load->model('user_model');
        $this->load->model('categorie_model');
        $verification = $this->user_model->_verifUser($nom,$pass);
        if($verification != 0) {
            $content="Acceuil";
		    $data['content']="Acceuil";
            $data['userid'] = $verification;
		    $data['categorie'] = $this->categorie_model->_getAllCategorie();
            $this->load->view('templates/index',$data);
        } else {
			$this->load->view('login');
		}
    }
}
