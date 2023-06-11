<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	function __construct()
	{
		parent ::__construct();

		if ($this->session->userdata('status') != 'Login') {
			header('Location:' . BASEURL . 'login');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('template/footer');
	}
}
