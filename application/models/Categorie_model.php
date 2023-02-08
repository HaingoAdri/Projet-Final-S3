<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Categorie_model extends CI_Model{

		function getAllCategories(){
			$sql = "Select * from Categories";
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			return $array;
		}

		function getCategory( $id ){
			$sql = "Select * from Categories where idCategories = %d";
			$sql = sprintf($sql , $id);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			return $array[0];
		}

		function getAllCategoriesOf( $idObject ){
			$sql = "select c.* from fusionObjets as f join Categories as c on f.idCategories = c.idCategories where f.idObjet = %d ";
			$sql = sprintf( $sql , $idObject );
			// echo $sql;
			$query = $this->db->query($sql);
			$array = $query->result_array();
			return (count($array) == 0) ? NULL : $array;
		}

		function getAdditionalData($array){
			for( $i = 0 ; $i < count($array) ; $i++ ){
				$array[$i]['count'] = $this->getCategoryCount($array[$i]['idCategories']);
			}
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

		function modify( $nom , $id ){
			$sql = "update Categories set nom = %s where idCategories = %d";
			$sql = sprintf($sql , $this->db->escape($nom) , $id);
			$this->db->query($sql);
		}

		function add( $nom ){
			$sql = "Insert into Categories values (default , %s)";
			$sql = sprintf($sql , $this->db->escape($nom));
			$this->db->query( $nom );
		}

		function remove( $id ){
			$sql = "delete from Categories where idCategories = %d";
			$sql = sprintf($sql , $id);
			$this->db->query($sql);
		}


		function getCategoryCount( $idCategory ){
			$sql = "select count(*) as isa from fusionObjets where idCategories = %d";
			$sql = sprintf($sql , $idCategory);
			$array = $this->db->query($sql);
			$array = $array->result_array();
			return $array[0]['isa'];
		}

		// Inona ny atao amoaka ny liste ana categorie misy ny chiffre ana produit ao amin'ny

	}


?>