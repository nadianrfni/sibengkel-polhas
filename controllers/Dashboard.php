<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
        $this->load->model('M_dashboard');
			header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	}

	public function index() {
		if($this->session->has_userdata('username')) {
        
		$data = array(
        'total_inventory' => $this->M_dashboard->hitungInventory(),
        'total_kategori' => $this->M_dashboard->hit_kategori(),
        'penjualan' => $this->M_dashboard->jual(),
        'pembelian' => $this->M_dashboard->beli(),
        'total_merk' => $this->M_dashboard->hit_merk(),
		'sidebar' 	=> "Dashboard",
		'menu'		=> "active",
		);
			$this->load->view('template/header');
			$this->load->view('template/sidebar',$data);
			$this->load->view('dashboard',$data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('login');
		}
	}}