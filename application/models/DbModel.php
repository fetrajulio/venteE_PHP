<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class DbModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
    public function getAll()
    {
        $Qer = " SELECT *
        FROM prod
         ";
        $qer = $this->db->query($Qer);
        return $qer->result_array();
    }

    public function searchT($type)
    {
        $Qer = " SELECT * FROM `prod` WHERE type=$type
         ";
        $qer = $this->db->query($Qer);
        return $qer->result_array();
    }
}
