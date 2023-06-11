<?php

class Register_model extends CI_Model
{
    
    public function prosesregister($data)
    {
        $nama = $data['nama'];
        $email = $data['email'];
        $username = $data['username'];
        $password = md5($data['password']);
        
        $this->db->query("INSERT INTO users VALUES('', '$nama', '$email', '$username', '$password')");
    }
}