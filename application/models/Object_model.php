<?php
	
	defined('BASEPATH') or exit('No direct script access allowed');



	class Object_model extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->model('Categorie_model' , 'categorie');
			$this->load->model('Image_model' , 'image');
			$this->load->model('User_Mod' , 'user');
		}

		function getAllProducts(){
			$sql = "select * from objets"; // maka ny objets rehetra
			$sql = $this->db->query($sql); // Requete exceute
			$array = $sql->result_array(); // azo daholo ny produit rehetra , de apiana sary iray miaraka amin'ny
			$array = $this->getAdditionalData($array);
			return $array;
		}

		function search( $titre , $categories ){
			$val = array();
			if( strcmp("", $titre) == 0){
				//Si il'y as pas de titre rechercher la categorie
				$val = $this->searchByCategory($categories);
			}else{
				$val = $this->searchByTitle($titre , $categories);
			}
			return $val;
		}

		function searchByCategory($categorie){
			$sql = "
			Select o.* 
			from(
				Select f.idObjet
				from fusionObjets as f
				where f.idCategories = %d ) as i 
				join objets as o on o.idObjet = i.idObjet
			";
			$sql = sprintf($sql , $categorie);
			print($sql);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			// var_dump($array);
			return $array;
		}

		function searchByTitle( $title, $categorie ){
			// Alaiko daholo ny objets rehetra
			$sql = "
			Select o.* 
			from(
				Select idObjet
				from fusionObjets as f
				where f.idCategories = %d) as i 
				join objets as o on o.idObjet = i.idObjet
			";
			$sql = sprintf($sql , $categorie);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$arr = array();
			for( $i = 0 ; $i  < count($array) ; $i++ ){
				if( stripos( $array[$i]['nom'] , $title , 0) != false ){
					$arr[] = $array;
				}
			}
			$arr = $this->getAdditionalData($arr);
			// var_dump($arr);
			return $arr;
			//Zay ny requete
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
				$array[$i]['users'] = $this->user->getUser( $array[$i]['idUsers'] );
				$allCategories = $this->categorie->getAllCategoriesOf( $array[$i]['idObjet'] );
				$array[$i]['categorie'] = $allCategories[0];
			}
			return $array;
		}

		function getObject($id){
			$sql = "select * from objets where idObjet = %d";
			$sql = sprintf($sql , $id);
			$query = $this->db->query($sql);
			$array = array();
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			// var_dump($array);
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

		function modify( $id , $nom , $prix , $descri ){
			$sql = "update objets set nom = %s , prix = %d ,descriptions = %s where idObjet = %d";
			$sql = sprintf(	$sql , $this->db->escape($nom) , $prix , $this->db->escape($descri) , $id );
			$this->db->query($sql);
		}

		// Ahoana no ataoko raha i modifie category aho
		// Alaiko fotsiny ny categorie an'zoky aloha
		function modifyCategory($idO , $idC){
			$me = $this->categorie->getAllCategoriesOf($idO)[0];
			$sql = "update fusionObjets set idCategories = %d where idObjet = %d and idCategories = %d";
			$sql = sprintf( $sql , $idC , $idO , $me['idCategories'] );
			$this->db->query( $sql );
		}

		function remove( $id ){
			$sql1 = "delete from fusionObjets where idObjet = %d";
			$sql2 = "delete from lien_image where idObjet = %d";
			$sql3 = "delete from objets where idObjet = %d";
			$sql1 = sprintf($sql1 , $id);
			$sql2 = sprintf($sql2 , $id);
			$sql3 = sprintf($sql3 , $id);
			$this->db->query($sql1);
			$this->db->query($sql2);
			$this->db->query($sql3);
		}

		function getLastInsered( ){
			$sql = "select * from objets order by idObjet desc";
			$query = $this->db->query($sql);
			$array = $query->result_array();
			return $array[0];
		}

	}
?>