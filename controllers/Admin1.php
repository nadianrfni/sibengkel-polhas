<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
 
class Admin1 extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->model('M_admin');
		$this->load->model('M_inventory');
	}

	public function index() {
		
		$data = array(
		'admin' 	=> $this->M_admin->tampil()->result(),
		'sidebar'	=> "Admin",
		'menu'		=> "active",
		);
		$this->load->view('template/head');
 
		$this->load->view('admin1',$data);
		$this->load->view('template/footer');
	
}

	public function add_data() {
		$username 	= $this->input->post('username',TRUE);
		$password 	= password_hash($this->input->post('password',TRUE),PASSWORD_DEFAULT);
		$level 		= $this->input->post('level',TRUE);
		$namalgkp	= $this->input->post('nama',TRUE);

		$data = array(
		'username' 		=> $username,
		'nama_lengkap'	=> $namalgkp,
		'password' 		=> $password,
		'level'			=> $level
		 );

		$this->M_admin->tambah($data,'tbl_admin');
		redirect('admin1');
	}

	public function delete($id) {
		$where = array('id' => $id );
		$this->M_admin->delete($where,'tbl_admin');
		redirect('admin1');
	}

	public function edit($id) {
		$where = array('id' => $id );
		$data['adm'] = $this->M_admin->edit($where,'tbl_admin')->result();
		$this->load->view('modal/edit-admin',$data);
	}

	public function change($id) {
		$where = array('id' => $id );
		$data['adm'] = $this->M_admin->change($where,'tbl_admin')->result();
		$this->load->view('template/head');
		$this->load->view('modal/ganti',$data);
	}

	public function changepass() {
		$id 		= $this->input->post('id',TRUE);
		$password 	= password_hash($this->input->post('password',TRUE),PASSWORD_DEFAULT);
		$data 	= array(
		'password'	=> $password
		);
		$where 	= array('id' => $id );
		$this->M_admin->changepass($where,$data,'tbl_admin');
		$this->load->view('notification/success');
		echo "<meta http-equiv='refresh' content=2;URL=index>";
	}

	public function update() {
		$id 		= $this->input->post('id',TRUE);
		$username 	= $this->input->post('username',TRUE);
		$level 		= $this->input->post('level',TRUE);
		$namalgkp	= $this->input->post('nama',TRUE);

		$data = array(	
		'username' 		=> $username,
		'level' 		=> $level,
		'nama_lengkap' 	=> $namalgkp 
		);
		
		$where = array('id' => $id );
		$this->M_admin->update($where,$data,'tbl_admin');
		redirect('admin1');
	}

}
