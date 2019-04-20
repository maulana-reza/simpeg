<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('componen/header');
		$this->load->view('dashboard/dasboard');
		$this->load->view('componen/footer');
		$this->load->view('dashboard/script');
	}
}
