<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Login_model');
	}
	
	public function index()
	{
		$data['title'] = 'Login';

        $this->load->view('template/header', $data);
		$this->load->view('login/index');
		$this->load->view('template/footer');
	}

	public function prosesregister()
	{
		$this->Register_model->prosesregister($_POST);
		header('Location:'. BASEURL .'Login');
	}

	public function cekLogin()
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$cek['cek'] = $this->Login_model->cekLogin($username, $password)->result();
		$data = $this->Login_model->cekLogin($username, $password)->num_rows();

		if($data > 0){

			foreach($cek['cek'] as $row):

			endforeach;

			$data_session = array(
				'nama' => $row->nama,
				'email' => $row->email,
				'status' => 'Login'
			);

			$this->session->set_userdata($data_session);

			header('Location: ' . BASEURL);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		header('Location:' . BASEURL . 'Login');
	}
}