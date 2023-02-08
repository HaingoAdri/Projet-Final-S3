<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Exchange_model extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->model('User_Mod' , 'user');
			$this->load->model('Object_model' , 'object');
		}

		function exchange( $idMpandefa , $idAndefasana , $idObjectAlefa , $idObjectAtakalo ){
			$sql = "insert into Proposition values ( default , %d , %d , %d , %d  , 'null')";
			$sql = sprintf($sql , $idMpandefa , $idAndefasana , $idObjectAlefa , $idObjectAtakalo);
			$this->db->query($sql);
		}

		function accept( $idProposition ){
			$sql = "update Proposition set timeExchange = now() where idProposition = %d";
			$sql = sprintf($sql , $idProposition);
			$this->db->query($sql);
		}

		function historiser( $idOldOwner , $idObject ){
			$sql = "insert into historique values (default , %d , %d , now() )";
			$sql = sprintf($sql , $idOldOwner , $idObject);
			$this->db->query($sql);
		}

		function getReceived( $myId ){
			
			$sql = "select * from Proposition where idMpandray = %d and idProposition not in (select idProposition from refused) and dayname(cast(timeExchange as char)) is NULL";
			$sql = sprintf($sql , $myId);
			// var_dump($sql);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			return $array;
		}

		function getHistorics( $idObject ){
			$sql = "select * from historique where idObject = %s";
			$sql = sprintf($sql , $idObject);
			$this->load->model('Historics_model' , 'historics');
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->historics->getAdditionalData($array);
			return $array;

		}

		function intervert( $idAutre , $idMe , $idMyObject , $idOther ){
			$sql = "update objets set idUsers = %d where idObjet = %d";
			$sql2 = "update objets set idUsers = %d where idObjet = %d";
			$sql = sprintf($sql , $idAutre , $idMyObject );
			$sql2 = sprintf($sql2 , $idMe , $idOther );
			$this->historiser( $idAutre , $idOther );
			$this->historiser( $idMe , $idMyObject );
			$this->db->query($sql);
			$this->db->query($sql2);

		}

		function getProposition( $id ){
			$sql = "select * from Proposition where idProposition = %d ";
			$sql = sprintf($sql , $id);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			return $array[0];
		}


		function getSent( $myId ){
			$sql = "select * from Proposition where idProposer = %d and idProposition not in (select idProposition from refused) and dayname(cast(timeExchange as char)) is NULL";
			$sql = sprintf($sql , $myId);
			$query = $this->db->query($sql);
			$array = $query->result_array();
			$array = $this->getAdditionalData($array);
			return $array;	
		}

		function getAdditionalData($array){
			for( $i = 0 ; $i < count($array) ; $i++ ){
				$array[$i]['requester'] = $this->user->getuser($array[$i]['idProposer']);
				$array[$i]['receiver'] = $this->user->getuser($array[$i]['idMpandray']);
				$array[$i]['requested'] = $this->object->getObject($array[$i]['idObjet_demander']);
				$array[$i]['proposed'] = $this->object->getObject($array[$i]['idObjet_proposer']);
			}
			return $array;
		}

		// inona

		function refuse( $idProposition ){
			$sql = " insert into refused values ('default' , %d) ";
			$sql = sprintf($sql , $idProposition);
			$this->db->query($sql);
		}

	}


?>