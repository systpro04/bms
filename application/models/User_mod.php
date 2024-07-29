<?php

class User_mod extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($searchValue)
    {
        $query = $this->db->select('id, photo, name, username, user_type, created')
            ->from('users')
            ->group_start()
            ->like('name', $searchValue)
            ->or_like('username', $searchValue)
            ->or_like('user_type', $searchValue)
            ->group_end()
            ->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

}
