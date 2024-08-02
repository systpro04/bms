<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function index()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/approved-RFS');
		$this->load->view('_layouts/footer');

	}
	public function index2()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/approved-TOR');
		$this->load->view('_layouts/footer');

	}
	public function execute()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/execute-RFS');
		$this->load->view('_layouts/footer');

	}
	public function execute2()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/execute-TOR');
		$this->load->view('_layouts/footer');

	}
	public function execute3()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/execute-Con');
		$this->load->view('_layouts/footer');

	}
}
