<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Mod extends CI_Model{

    public function connect($email,$username){
        $sql = "select * from utilisateurs where email = %s and username = %s";
        $sprint = sprintf($sql,$this->db->escape($email),$this->db->escape($username));
        $query = $this->db->query($sprint);
        $valiny = $query->result_array();
        return (count($valiny) == 0) ? NULL : $valiny[0]; 
    }
    
}