<?php

class Login_admin extends CI_Model {
    
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('admin')->row_array();
        return $user;
    }

}