<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		// Tokony teneniko izy eto hoe miverena any rehefa ka tsisy ny zava-drehetra
	}

	public function index(){	
		redirect( site_url('user/') );
	}

	function acceuil(){

		$this->load->model('Categorie_model' , 'categories');
		$this->load->model('Object_model' , 'objets');
		$data['categories'] = $this->categories->getAllCategories();
		$data['objets'] = $this->objets->getAllProducts();
		$this->load->view('Objects/Index' , $data);

	}	

	function profil(){
		$this->load->model('Object_model' , 'objets');
		$this->load->model('User_Mod' , 'user');
		$data['objets'] = $this->objets->getObjectsOf($this->session->userdata('idUser'));
		$data['user'] = $this->user->getuser($this->session->userdata('idUser'));
		// var_dump($data);
		$this->load->view('users/Profile' , $data);
	}

	function log_out(){
		$this->session->sess_destroy();
		redirect('welcome');	
	}

	function add(){
		$this->load->model('Categorie_model' , 'c');
		$data['categories'] = $this->c->getAllCategories();
		$this->load->view('Add_Object' , $data);
	}
	function modify(){
		$this->load->model('Object_model' , 'o');
		$this->load->model('Categorie_model' , 'c');
		$id = $this->input->get('idObject');
		// var_dump($id);
		$ob = $this->o->getObject($id);
		$data['categories'] = $this->c->getAllCategories();
		$data['objet'] = $ob;
		// var_dump($ob);
		$this->load->view('Objects/ModifyObject' , $data);
	}
	//cette page accepte une variable url facultative
	
}
