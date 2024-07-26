<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('_layouts/header');
		$this->load->view('profile/edit-profile');
		$this->load->view('_layouts/footer');

	}
}
