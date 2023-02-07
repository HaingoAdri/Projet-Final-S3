<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Mod extends CI_Model{

    public function login_ao($email,$username){
        $sql = "select * from utilisateurs where email = '%s' and username = '%s'";
        $sprint -> sprintf($sql,$this->db->escape($email),$this->db->escape($username));
        $query = $this->db->query($sprint);
        return $query->result_array();
    }
    
}