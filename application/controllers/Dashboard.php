<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_mod');
    }
	public function index()
	{

		$data['user_count'] = $this->Dashboard_mod->count();
		$this->load->view('_layouts/header');
		$this->load->view('personnel/dashboard', $data);
		$this->load->view('_layouts/footer');

	}
}
