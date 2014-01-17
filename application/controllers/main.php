<?php

class Main extends CI_Controller
{
    public function Main()
    {
        parent::__construct();
        $this->load->model('users');
    }

    public function index()
    {
        $this->load->view('users_list');
    }

    public function getArray()
    {
        $users_list = $this->users->getTable();
        echo json_encode($users_list);
    }
}