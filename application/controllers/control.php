<?php

class Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(site_url('DbModel'));
    }
    public function view()
    {

        $data['prod'] = $this->DbModel->getAll();
        $this->load->view('home');
        $this->load->view('corp', $data);
        $this->load->view('footer');
    }

    public function viewT($type = 1)
    {
        $data['prod'] = $this->DbModel->searchT($type);
        $this->load->view('home');
        $this->load->view('corp', $data);
        $this->load->view('footer');
    }
}
