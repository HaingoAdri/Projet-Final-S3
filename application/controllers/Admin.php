<?php
	defined('BASEPATH') or exit('No direct access allowed');

	class Admin extends CI_Controller{
		public function __construct(){
			parent::__construct();
			if( !isset($_SESSION['admin']) ){
				redirect(site_url('Index'));
			}
		}
		function index(){
			$this->load->model('Categorie_model' , 'category');
			$this->load->model('User_Mod' , 'user');
			$data['categories'] = $this->category->getAllCategories();
			$this->load->view('admin/Admin_Panel' , $data);
		}
	}

?>



