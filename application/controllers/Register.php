<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{
	function __construct()
	{
		parent ::__construct();
		$this->load->model('Register_model');
	}
	
	public function index()
	{
		$data['title'] = 'Register';

        $this->load->view('template/header', $data);
		$this->load->view('register/index');
		$this->load->view('template/footer');
	}

	public function prosesregister()
	{
		$this->Register_model->prosesregister($_POST);
		header('Location:'. BASEURL .'Login');
	}
}