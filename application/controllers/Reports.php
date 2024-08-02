<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function index()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/reports');
		$this->load->view('_layouts/footer');

	}
	public function request()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/request');
		$this->load->view('_layouts/footer');

	}
}
