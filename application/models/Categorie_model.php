<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Categorie_model extends CI_Model{

		function getAllCategories(){
			$sql = "Select * from Categories";
			$query = $this->db->query($sql);
			$array = $query->result_array();
			return $array;
		}

		function getAllCategoriesOf( $idObject ){
			$sql = "select * 
				from fusionObjets as f
				join Categories as c
				on f.idCategories = c.idCategories
				where f.idObjet = %d
			";
			$sql = sprintf( $sql , $this->db->escape($idObject) );
			$query = $this->db->query($sql);
			$array = $query->result_array();
			return $array;
		}

		function stringify( $categories ){
			$var = "";
			for($i = 0 ; $i < count($categories) ; $i++){
				$var += ".".$categories[$i]['nom'];
				if( $i != count($categories) -1 ){
					$var += ' ';
				}
			}
			return $var;
		}

	}


?>