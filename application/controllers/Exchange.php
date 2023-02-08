<?php
	
	defined('BASEPATH') or exit('No direct access allowed');

	class Exchange extends CI_Controller{

		function index(){
			$id = $this->input->get('id');
			// alaina ny produit misy anle id
			$this->load->model('Object_model' , 'object');
			$this->load->model('Categorie_model' , 'categories');
			$data['categories'] = $this->categories->getAllCategories();
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
			$this->load->model('Categorie_model' , 'categories');
			$data['sent'] = $this->exchange->getSent( $this->session->userdata('idUser') );
			$data['categories'] = $this->categories->getAllCategories(); 			
			$data['received'] = $this->exchange->getReceived( $this->session->userdata('idUser') );
			$this->load->view('users/Propositions' , $data);
		}
		function accept(){
			$this->load->model('Exchange_model' , 'exchange');
			$idProposition = $this->input->get('id');
			$proposition = $this->exchange->getProposition($idProposition);
			$this->exchange->intervert( $proposition['idProposer'] , $proposition['idMpandray'] , $proposition['idObjet_demander'] , $proposition['idObjet_proposer'] );
			$this->exchange->accept($idProposition);
		}

		function reject(){
			$this->load->model('Exchange_model' , 'exchange');
			$idProposition = $this->input->get('id');
			$this->exchange->refuse($idProposition);
			redirect(site_url('exchange/proposition'));
		}

		function self(){
			$id = $this->input->get('id');
			$this->load->model('Exchange_model' , 'exchange');
			$this->load->model('Categorie_model' , 'categories');
			$this->load->model('Object_model' , 'object');

			$data['objet'] = $this->object->getObject( $id );
			$data['historics'] = $this->exchange->getHistorics( $id );
			$data['categories'] = $this->categories->getAllCategories();
			$this->load->view('Objects/Self' , $data);
		}

	}

?>

