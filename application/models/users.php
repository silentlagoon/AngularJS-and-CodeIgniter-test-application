<?php

class Users extends CI_Model
{
    protected $table;

    public function Users()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function getTable()
    {
        return $this->db->get_where($this->table)->result();
    }
}