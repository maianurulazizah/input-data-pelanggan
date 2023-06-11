<?php

class Pelanggan_model extends CI_Model
{

    public function input($data)
    {
        $this->db->insert('pelanggan', $data);
    }

    public function getAllPelanggan()
    {
        return $this->db->query("SELECT * FROM pelanggan ORDER BY id DESC");
    }

    public function getUbah($id)
    {
        return $this->db->query("SELECT * FROM `pelanggan` WHERE id='$id'");
    }

    public function ubah($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('pelanggan', $data);
    } 

    public function hapus($id)
    {
        return $this->db->query("DELETE FROM pelanggan WHERE id='$id'");
    } 
}