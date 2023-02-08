<?php
	defined('BASEPATH') or exit('No access direct allowed');

	class Historics_model extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->model('Categorie_model' , 'categorie');
			$this->load->model('User_mod' , 'user');
			$this->load->model('Object_model' , 'object');
		}

		function getAdditionalData( $array ){
			for( $i = 0 ; $i < count($array) ; $i++ ){
				$array[$i]['user'] = $this->user->getuser( $array[$i]['idOld'] );
				$array[$i]['object'] = $this->object->getObject( $array[$i]['idObject'] );
			}
			return $array;
		}

	}

?>