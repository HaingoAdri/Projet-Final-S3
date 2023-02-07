<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function _construct(){
          parent::_construct();
          $this->load->helper(array('form','url'));
          $this->load->library(['form_validation','session']);
          $this->load->database();
    } 
    public function login(){
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('login_view');
        }
        else{
            $email=$this->input->post('email');
            $password = $this->input->post('password');
            $user = this->db->get_where('users',['email'=>$email])->row();
            if(!$user){
                $this->session->set_flashdata('login_error','Diso Mot de passe na email!',300);
                redirect(uri_string());
            }

            if(!password_verify($password,$user->password)){
                $this->session->set_flashdata('login_error','Diso Mot de passe na email!',300);
                redirect(uri_string());
            }

            $data=array(
                'id_User'=> $user->id_User;
                'email'=> $email->email;
                'password'=> $password->password;
            );

            $this->session->set_userdata($data);
            $this->load->view('Affichage');
        }
    }
}
