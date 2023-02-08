<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Mod extends CI_Model{

    public function connect($email,$username){
        $sql = "select * from utilisateurs where email = %s and password = %s";
        $sprint = sprintf($sql,$this->db->escape($email),$this->db->escape($username));
        $query = $this->db->query($sprint);
        $valiny = $query->result_array();
        return (count($valiny) == 0) ? NULL : $valiny[0]; 
    }

    function inscription( $nom , $prenom , $email , $password  ){
        $sql = "insert into utilisateurs values ( default , %s , %s , %s , %s , false )";
        $sql = sprintf($sql , $this->db->escape($nom) , $this->db->escape($prenom) , $this->db->escape($email) , $this->db->escape($password));
        $this->db->query($sql);
    }

    function getUser($idUser){
        $sql = "select * from utilisateurs where idUsers = %d";
        $sql = sprintf($sql , $idUser);
        $query = $this->db->query($sql);
        $array = $query->result_array();
        return $array[0];
    }
    
}