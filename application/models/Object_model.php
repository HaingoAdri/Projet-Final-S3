<?php
	
	defined('BASEPATH') or exit('No direct script access allowed');



	class Object_model extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->model('Categorie_model' , 'categorie');
			$this->load->model('Image_model' , 'image');
		}

		function getAllProducts(){
			$sql = "select * from objets"; // maka ny objets rehetra
			$sql = $this->db->query($sql); // Requete exceute
			$array = $sql->result_array(); // azo daholo ny produit rehetra , de apiana sary iray miaraka amin'ny
			$array = $this->getAdditionalData($array);
			return $array;
		}

		function getObjectsOf( $idUsers ){
			$sql = "select * from objets where idUsers = %s";
			$sql = sprintf( $sql , $this->db->escape($idUsers) );
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData( $array );
			// Mahazo liste ana objet de alaina ihany koa ny data mifanarka aminy
			return $array;
		}

		function getAdditionalData($array){
			for ($i=0; $i < count($array) ; $i++) { 
				$array[$i]['image'] = $this->image->getAllImageOf( $array[$i]['idObjet'] )[0];
				$allCategories = $this->categorie->getAllCategoriesOf( $array[$i]['idObjet'] );
				$array[$i]['categorie'] = $allCategories[0];
			}
			return $array;
		}

		function getObject($id){
			$sql = "select * from objets where idObjet = %d";
			$sql = sprintf($sql , $id);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			return $array[0];
		}

		function add( $nom , $price , $descri , $idUser){
			$sql = "insert into objets values (default , %s , %d , %s , %d)";
			$sql = sprintf($sql , $this->db->escape($nom) , $price  , $this->db->escape($descri) , $idUser );
			$this->db->query($sql);
		}

		function addToFusion($idOb , $idCat){
			$sql = "insert into fusionObjets values (default , %s , %s)";
			$sql = sprintf($sql , $this->db->escape($idOb) , $this->db->escape($idCat));
			$this->db->query($sql);	
		}

		function getLastInsered( ){
			$sql = "select * from objets order by idObjet desc";
			$query = $this->db->query($sql);
			$array = $query->result_array();
			return $array[0];
		}

	}
?>