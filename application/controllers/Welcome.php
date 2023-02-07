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
	//cette page accepte une variable url facultative
	
}
