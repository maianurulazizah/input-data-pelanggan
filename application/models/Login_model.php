<?php

class Login_model extends CI_Model
{

      public function cekLogin($username, $password)
    {
        return $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    }

};