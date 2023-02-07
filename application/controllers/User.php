<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
    public function _construct(){
          parent::_construct();      
    } 
    function login_Page(){
            $this->load->view('Login');
    }

		public function login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('User_Mod' , 'user');
			$user = $this->user->connect( $email , $password );
			$this->showPage( $user );
	}

	function inscription( ){
		// inona ny atao ato
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$email = $this->input->post('email');
		$password = $this->input->post('pass1');
		$password2 = $this->input->post('pass2');
	}

	function showPage( $user ){
			if( $user == NULL ){
				$data['error'] = 'Please verify the credentials you use';
				$this->load->view('Login' , $data);
			}else{
				echo "OUEEEEE";
			}
	}

}
