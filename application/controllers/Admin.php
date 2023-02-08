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
		function addCategory(){
			$this->load->view('admin/AddCategory');
		}
		function add(){
			$nom = $this->input->post('category');
			$this->load->model('Categorie_model' , 'c');
			$this->c->add( $nom );
		}
		function mod(){
			$id = $this->input->post('idCategory');
			$nom = $this->input->post('category');
			$this->load->model('Categorie_model' , 'c');
			$this->c->modify( $nom , $id);
			redirect(site_url('admin/modify?idCategory='.$id));
		}
		function modify(){
			$id = $this->input->get('idCategory');
			$this->load->model('Categorie_model' , 'c');
			$data['category'] = $this->c->getCategory( $id );
			$this->load->view('admin/ModifyCategory' , $data);
		}
		function remove(){
			$id = $this->input->get('idCategory');
			$this->load->model('Categorie_model' , 'c');
			$this->c->remove($id);
			redirect(site_url('admin'));
		}
	}

?>



