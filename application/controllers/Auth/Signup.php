<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('_layouts/auth');
		$this->load->view('auth/signup');
		$this->load->view('_layouts/auth_footer');

	}
}
