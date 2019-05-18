<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokumen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_dokumen');
		$this->load->helper(array('form', 'url'));
}
	public function index()
	{
		$data['dokumen'] = $this->m_dokumen->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('dokumen', $data);
		$this->load->view('footer');
	}
	public function request()
	{
		$this->load->view('header');
		$this->load->view('request_dokumen');
		$this->load->view('footer');
	}
	public function request_aksi()
	{
		$nama_dokumen = $this->input->post('nama_dokumen');
		$divisi = $this->input->post('divisi');
		$requester = $this->input->post('requester');
		$tgl_request = $this->input->post('tgl_request');
		$data = array(
			'nama_dokumen' => $nama_dokumen,
			'divisi' => $divisi,
			'requester' => $requester,
			'tgl_request' => $tgl_request
		);
		$this->m_dokumen->insert($data, 'dokumen');
		redirect('dokumen');
	}
	function update() {
		$where = array('id_dokumen' => $id);
		$data['dokumen'] = $this->m_dokumen->update($where,'dokumen')->result();
	}
	function uppload(){
		$this->load->view('header');
		$this->load->view('uppload_dokumen');
		$this->load->view('footer');
		$id = $this->input->post('id_dokumen');
		$upploader = $this->input->post('upploader');
		$tgl_uppload = $this->input->post('tgl_uppload');
		$data = array(
			'upploader' => $upploader,
			'tgl_uppload' => $tgl_uppload
		);
		$where = array(
			'id_dokumen' => $id
		);
		$this->m_dokumen->uppload($where,$data,'dokumen');
		$this->load->view('uppload_dokumen', array('error' => ''));
		redirect('dokumen');
		if (! $this->uppload->do_uppload('berkas')){
			$error = array('error' => $this->uppload->display_errors());
			$this->load->view('uppload_dokumen', $error);
		}else{
			$data = array('uppload data' => $this->uppload->data());
			$this->load->view('uppload_dokumen_sukses', $data);
		}
	}
	
	function edit($id) {
		$where = array('id_dokumen' => $id);
		$data['dokumen'] = $this->m_dokumen->edit($where,'dokumen')->result();
		$this->load->view('header');
		$this->load->view('edit_dokumen',$data);
		$this->load->view('footer');
	}
	function delete($id){
		$where = array(
			'id_dokumen' => $id
		);

		// menghapus data anggota dari database sesuai id
		$this->m_dokumen->delete_data($where,'dokumen');

		// mengalihkan halaman ke halaman data anggota
		redirect(base_url().'dokumen');
	} 
}
