<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_mod');
    }
    public function index()
    {
        $this->load->view('_layouts/header');
        $this->load->view('profile/users');
        $this->load->view('_layouts/footer');
        $this->load->view('_layouts/js_files');
    }
    public function user_list()
    {
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $searchValue = $this->input->post('search')['value'];

        $list = $this->User_mod->get_user($searchValue);

        $totalRecords = count($list);
        $slice = array_slice($list, $start, $length);
        $data = array(
            'draw' => $this->input->post('draw'),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $slice
        );
        echo json_encode($data);
    }

    public function create_user() 
    {
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user_type = $this->input->post('user_type');

        $hashed_password = hash($password);

        $data = [
            'name' => $name,
            'username' => $username,
            'password' => $hashed_password,
            'user_type' => $user_type,
            'created' => date('Y-m-d H:i:s')
        ];

        $insert = $this->User_mod->insert_user($data);

        if ($insert) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error inserting user']);
        }
    }

    public function update_user() 
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $user_type = $this->input->post('user_type');
        $password = $this->input->post('password');

        $data = array(
            'name' => $name,
            'username' => $username,
            'user_type' => $user_type,
            'updated' => date('Y-m-d H:i:s')
        );

        if (!empty($password)) {
            $data['password'] = sha1($password);
        }

        $update = $this->User_mod->update_user($id, $data);

        if ($update) {
            $response = array('status' => 'success', 'message' => 'Successfully Updated');
        } else {
            $response = array('status' => 'error', 'message' => 'Error Updating');
        }

        echo json_encode($response);
    }

}
