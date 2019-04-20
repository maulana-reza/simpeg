<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {

	public function index()
	{
		$this->load->view('componen/header');
		$this->load->view('data_pegawai/data_pegawai');
		$this->load->view('componen/footer');
		$this->load->view('data_pegawai/script');
	}

 	public function tambah()
	{
		$this->load->view('componen/header');
		$this->load->view('data_pegawai/tambah_pegawai');
		$this->load->view('componen/footer');
		$this->load->view('data_pegawai/script');

	}


	
}
