<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_insert extends CI_Model
{
//public $table = 'tbl_penjualan';
    //=============================================== CRUD =================================================================//   
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function tampil_user()
    {
        return $this->db->get('tbl_penjualan');
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function tampil_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    //=============================================== End Crud =================================================================//     

};