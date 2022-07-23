<?php

class Update extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_insert");
    }

    public function index()
    {
    }


    public function update_user($nonota)
    {
        $data_user = array(

            'status_pembayaran' => $this->input->post('status_pembayaran'),
            'bayar' => $this->input->post('bayar'),
            'kembalian' => $this->input->post('kembalian'),
        );

        $where = array('nonota' => $nonota);

        $this->m_insert->update_data($where, $data_user, 'tbl_penjualan');

        redirect('laporan/lap_penjualan');
    }
}