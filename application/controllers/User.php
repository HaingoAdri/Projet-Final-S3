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

    function getData(){
    	$data['nom'] = '';
			$data['prenom'] = '';
			$data['email'] = '';
			$data['pass1'] = '';
			$data['pass2'] = '';	
			$data['emailLogin'] = 'sarobidy@gmail.com';
			$data['passLogin'] = 'sarobidy';
			$data['error'] = '';
			$data['error_inscription'] = '';
			return $data;
    }

    function index(){
      $this->load->view('Login' , $this->getData());
    }

    function inscriptionPage(){
    	$this->load->view('Inscription' , $this->getData());	
    }

		public function login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('User_Mod' , 'user');
			$user = $this->user->connect( $email , $password );
			$this->showPage( $email , $password ,$user );
	}

	function inscription( $nom , $prenom , $email , $pass , $pass2 , $verify){
		$data['nom'] = $nom;
		$data['prenom'] = $prenom;
		$data['email'] = $email;
		$data['pass1'] = $pass;
		$data['pass2'] = $pass2;
		if( $verify == false ){
			$this->load_error_inscription($data);
		}else{
			$this->load->model('User_Mod' , 'user');
				$this->user->inscription( $nom , $prenom , $email, $pass );
			// echo "OUEEEEEEE";
		}
	}

	function load_error_inscription( $data ){
		$data['error_inscription'] = 'The password is not the same';
		$data['error'] = '';
		$this->load->view('Inscription' , $data); 

	}

	function load_error_login($data){
		$data['error'] = 'Please verify the credentials you use';
		$this->load->view('Login' , $data);
	}

	function signup( ){
		// inona ny atao ato
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$email = $this->input->post('email');
		$password = $this->input->post('pass1');
		$password2 = $this->input->post('pass2');
		// alefa mi-verifier aloha
		$this->load->helper('Password');
		$v = verify($password , $password2);
		$this->inscription( $nom , $prenom , $email , $password , $password2 , $v );
	}

	function showPage( $email , $password ,$user ){
		$data['emailLogin'] = $email;
		$data['passLogin'] = $password;
			if( $user == NULL ){
				$this->load_error_login($data);
			}else{
				echo 'oueeee';
			}
	}

}
