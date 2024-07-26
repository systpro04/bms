<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function index()
	{
		$this->load->view('_layouts/header');
		$this->load->view('personnel/transaction');
		$this->load->view('_layouts/footer');

	}
}
