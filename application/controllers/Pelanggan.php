<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller 
{
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Pelanggan_model');

		if ($this->session->userdata('status') != 'Login') {
			header('Location:' . BASEURL . 'login');
		}
	}
	
	public function index()
	{
        $data['title'] = 'Data Pelanggan';
		$data['pelanggan'] = $this->Pelanggan_model->getAllPelanggan()->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('pelanggan/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
        $data['title'] = 'Input Data';
		$data['jurnal'] = $this->Pelanggan_model->getJurnal()->result();
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('pelanggan/forminput', $data);
		$this->load->view('template/footer');
	}

	public function formubahdata($id)
	{
        $data['title'] = 'Ubah Data';
		$data['ubah'] = $this->Pelanggan_model->getUbah($id)->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('pelanggan/formubah', $data);
		$this->load->view('template/footer');
	}

	public function formubahdatamodal()
	{
		$id = $_POST['id'];
        $data['title'] = 'Ubah Data';
		$data['ubah'] = $this->Pelanggan_model->getUbah($id)->result();

		$this->load->view('pelanggan/formubahmodal', $data);
	}


	public function tambahmodal()
	{
		$this->load->view('pelanggan/forminputmodal');
	}

	public function prosesinput()
	{
		$nama = $_POST['nama'];
		$snd = $_POST['snd'];
		$no = $_POST['no'];
		$totag = $_POST['totag'];
		$desc = $_POST['desc'];

		$data = [
			'nama' => $nama,
			'snd' => $snd,
			'no' => $no,
			'totag' => $totag,
			'desc' => $desc
		];

		$this->Pelanggan_model->input($data);

		header('Location:'.BASEURL.'/Pelanggan');
	}

	public function prosesubah()
	{
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$snd = $_POST['snd'];
		$no = $_POST['no'];
		$totag = $_POST['totag'];
		$desc = $_POST['desc'];

		$data = [
			'nama' => $nama,
			'snd' => $snd,
			'no' => $no,
			'totag' => $totag,
			'desc' => $desc
		];

		$this->Pelanggan_model->ubah($data, $id);

		header('Location:'. BASEURL .'Pelanggan');
	}

	public function hapus($id)
	{
		$this->Pelanggan_model->hapus($id);

		header('Location:' . BASEURL . 'Pelanggan');
	}
	
}