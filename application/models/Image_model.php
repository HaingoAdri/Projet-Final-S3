<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Image_model extends CI_Model{
		function getAllImageOf($idObject){
			$sql = "select * from lien_image where idObjet = %d";
			$sql = sprintf($sql , $idObject);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			return (count ($array ) == 0) ? NULL : $array;
		}

		function insert( $data = array() ){
			$insert = $this->db->insert_batch('lien_image' , $data);
			return $insert ? true : false;
		}

	}

?>