<?php

class CrudPetugas extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data_petugas');
		$this->load->helper('url');
	}
	
	function index(){
		$data['data_petugas'] = $this->m_data_petugas->tampil_data()->result();
		$this->load->view('v_tampil_petugas',$data);
	}
	
	function tambah(){
		$this->load->view('v_input_petugas');
	}
	
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'username' => $username,
			'password' => $password
			);
		$this->m_data_petugas->input_data($data,'data_petugas');
		redirect('crud_petugas/index');
	}
	
	function edit($id){
		$where = array('id' => $id);
		$data['data_petugas'] = $this->m_data_petugas->edit_data($where, 'data_petugas')->result();
		$this->load->view('v_edit_petugas', $data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password] = $this->input->post('password');
		
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'username' => $username,
			'password' => $password
			);
			
			$where = array(
				'id' => $id
			);
			
			$this->m_data_petugas->update_data($where, $data, 'data_petugas');
			redirect('crud_petugas/index');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data_petugas->hapus_data($where, 'data_petugas');
		redirect('crud_petugas/index');
	}
}