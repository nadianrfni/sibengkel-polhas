<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function tampil($nonota)
    {
        $this->load->model('m_insert');
        $where = array('nonota' => $nonota);
         //$dt['tampil_brng'] = $this->m_insert->tampil_data($where, 'tbl_detail_penjualan')->result();
        $data['tampil_user'] = $this->m_insert->tampil_data($where, 'tbl_penjualan')->result();
        $this->load->view('template/header');
         
        $this->load->view('edit', $data);
         $this->load->view('template/footer');
    }
}