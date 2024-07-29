<?php

class Dashboard_mod extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function count(){
        $this->db->from('users');
        return $this->db->count_all_results();
    }
    
}


