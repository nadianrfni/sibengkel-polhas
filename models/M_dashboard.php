<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function hitungInventory()
    {   
        $query = $this->db->get('tbl_barang');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hit_kategori()
    {   
        $query = $this->db->get('tbl_kategori');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hit_merk()
    {   
        $query = $this->db->get('tbl_sub_kategori');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

    public function jual()
    {   
        $query = $this->db->get('tbl_penjualan');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

    public function beli()
    {   
        $query = $this->db->get('tbl_pembelian');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }


}