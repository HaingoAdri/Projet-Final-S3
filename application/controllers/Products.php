<?php
	
	defined('BASEPATH') or exit('No direct script access allowed');

	class Products extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Image_model' , 'file');
		}

		function addProduct(){
			$nom = $this->input->post('nom');
			$price = $this->input->post('price');
			$descri = $this->input->post('descri');
			// Inona no atao manaraka
			// Inserena ny nom fa mila verifiena aloha
			$this->load->helper('name_helper');
			$this->load->model('Object_model' , 'object');
			$this->object->add($nom , $price , $descri , $this->session->userdata('idUser'));
			$lastInsered = $this->object->getLastInsered();
			// mampiditra azy anaty id
			$this->object->addToFusion( $lastInsered['idObjet'] , $this->input->post('category') );
			if( !empty($_FILES['userfile']['name']) && count(array_filter($_FILES['userfile']['name'])) > 0 ){
				$this->addImages($lastInsered['idObjet'] );
				redirect('welcome/add');
			}
		}

		function addImages($idObject){
			$upload_path = './assets/images/image';
			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'jpeg|jpg|png|gif';
			$this->load->library('upload' , $config);
			$this->upload->initialize($config);
			$data = array();
			$files = $_FILES;
			$count = count($_FILES['userfile']['name']);
			for( $i = 0 ; $i < $count ; $i++ ){
				$_FILES['userfile']['name'] = $files['userfile']['name'][$i];
				$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
				$_FILES['userfile']['size'] = $files['userfile']['size'][$i];
				
				if( $this->upload->do_upload() ){
					$upload_data = $this->upload->data();
		            $file_name = $upload_data['file_name'];

		            // Insert the file information into the database
		            $data = array(
		                'idObjet' => $idObject,
		                'lienImage' => $file_name
		            );
		            $this->db->insert('lien_image', $data);
				}else{
					echo $this->upload->display_errors();
				}
			}

		}

		function modify(){
			$id = $this->input->post('idObjet');
			$nom = $this->input->post('nom');
			$price = $this->input->post('price');
			$category = $this->input->post('category');
			$descri = $this->input->post('descri');
			// Inserena fotsiny ito zavatra ito

			$this->load->model('Object_model' , 'object');
			$this->object->modify( $id , $nom , $price , $descri );
			$this->object->modifyCategory( $id , $category );
			redirect('welcome/modify?idObject='.$id);
		}
		// Inona no azo atao ato afaka verifiena aloha ilay nom

	}

?>