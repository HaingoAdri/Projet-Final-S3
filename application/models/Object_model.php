<?php
	
	defined('BASEPATH') or exit('No direct script access allowed');

	class Object_model extends CI_Model{
		function getAllProducts(){
			$this->load->model('Categorie_model' , 'categorie');
			$sql = "select * from objets"; // maka ny objets rehetra
			// Executena aloha io
			$sql = $this->db->query($sql); // Requete exceute
			$array = $sql->result_array(); // azo daholo ny produit rehetra
			return $array;
		}
	}

?>