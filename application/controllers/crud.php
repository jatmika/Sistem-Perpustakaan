<?php

class Crud extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}
	
	function index(){
		$data['data_anggota'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	
	function tambah(){
		$this->load->view('v_input');
	}
	
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'no_hp' => $no_hp
			);
		$this->m_data->input_data($data,'data_anggota');
		redirect('crud/index');
	}
	
	function edit($id){
		$where = array('id' => $id);
		$data['data_anggota'] = $this->m_data->edit_data($where, 'data_anggota')->result();
		$this->load->view('v_edit', $data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'no_hp' => $no_hp
			);
			
			$where = array(
				'id' => $id
			);
			
			$this->m_data->update_data($where, $data, 'data_anggota');
			redirect('crud/index');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'data_anggota');
		redirect('crud/index');
	}
}