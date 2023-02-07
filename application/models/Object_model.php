<?php
	
	defined('BASEPATH') or exit('No direct script access allowed');

	class Object_model extends CI_Model{
		function getAllProducts(){
			$this->load->model('Categorie_model' , 'categorie');
			$this->load->model('Image_model' , 'image');
			$sql = "select * from objets"; // maka ny objets rehetra
			$sql = $this->db->query($sql); // Requete exceute
			$array = $sql->result_array(); // azo daholo ny produit rehetra , de apiana sary iray miaraka amin'ny
			for ($i=0; $i < count($array) ; $i++) { 
				$array[$i]['image'] = $this->image->getAllImageOf( $array[$i]['idObjet'] )[0];
				$allCategories = $this->categorie->getAllCategoriesOf( $array[$i]['idObjet'] );
				$array[$i]['categorie'] = $allCategories[0];
			}
			return $array;
		}

	}



?>