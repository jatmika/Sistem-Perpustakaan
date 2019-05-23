<?php

class CrudBuku extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data_buku');
		$this->load->helper('url');
	}
	
	function index(){
		$data['data_buku'] = $this->m_data_buku->tampil_data()->result();
		$this->load->view('v_tampil_buku',$data);
	}
	
	function tambah(){
		$this->load->view('v_input_buku');
	}
	
	function tambah_aksi(){
		$nama_buku = $this->input->post('nama_buku');
		$penulis = $this->input->post('penulis');
		$penerbit = $this->input->post('penerbit');
		$kategori = $this->input->post('kategori');
		
		$data = array(
			'nama_buku' => $nama_buku,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'kategori' => $kategori
			);
		$this->m_data_buku->input_data($data,'data_buku');
		redirect('crud_buku/index');
	}
	
	function edit($id){
		$where = array('id' => $id);
		$data['data_buku'] = $this->m_data_buku->edit_data($where, 'data_buku')->result();
		$this->load->view('v_edit_buku', $data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$nama_buku = $this->input->post('nama_buku');
		$penulis = $this->input->post('penulis');
		$penerbit = $this->input->post('penerbit');
		$kategori = $this->input->post('kategori');
		
		$data = array(
			'nama_buku' => $nama_buku,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'kategori' => $kategori
			);
			
			$where = array(
				'id' => $id
			);
			
			$this->m_data_buku->update_data($where, $data, 'data_buku');
			redirect('crud_buku/index');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data_buku->hapus_data($where, 'data_buku');
		redirect('crud_buku/index');
	}
}