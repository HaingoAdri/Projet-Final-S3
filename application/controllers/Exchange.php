<?php
	
	defined('BASEPATH') or exit('No direct access allowed');

	class Exchange extends CI_Controller{

		function index(){
			$id = $this->input->get('id');
			// alaina ny produit misy anle id
			$this->load->model('Object_model' , 'object');
			$data['object'] = $this->object->getObject($id);
			//azoko ny object ilaiko

			$data['myObject'] = $this->object->getObjectsOf( $this->session->userdata('idUser') );
			$this->load->view('Exchange' , $data);
			// mandeha any amin'ny echanges
		}

		function exchanges(){
			$owner = $this->input->post('idOwner');
			$ownerO = $this->input->post('idObject1');
			$myself = $this->session->userdata('idUser');
			$myObj = $this->input->post('toExchange');

			$this->load->model('Exchange_model' , 'echange');
			$this->echange->exchange( $myself , $owner , $ownerO , $myObj );
			redirect(site_url('exchange/?id='.$ownerO));
		}

		function proposition(){
			// inona no atao ato maka ny propositions rehetra
			$this->load->model('Exchange_model' , 'exchange');
			$data['sent'] = $this->exchange->getSent( $this->session->userdata('idUser') ); 			
			$data['received'] = $this->exchange->getReceived( $this->session->userdata('idUser') );
			$this->load->view('users/Propositions' , $data);
		}
		function accept(){
			$this->load->model('Exchange_model' , 'exchange');
			$idProposition = $this->input->get('id');
			$proposition = $this->exchange->getProposition($idProposition);
			// ananako zao ny proposition iray
			//donc ananako ny mpandefa sy ny mpandray
			$this->exchange->intervert( $proposition['idProposer'] , $proposition['idMpandray'] , $proposition['idObjet_demander'] , $proposition['idObjet_proposer'] );
			$this->exchange->accept($idProposition);
		}
	}

?>

