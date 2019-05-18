<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class knowledge extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_knowledge');
		$this->load->helper(array('form', 'url'));
}
	public function index()
	{
		$data['knowledge'] = $this->M_knowledge->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('knowledge',$data);
		$this->load->view('footer');
	}
	public function add()
	{
		$this->load->view('header');
		$this->load->view('add_knowledge');
		$this->load->view('footer');
	}
	public function request_aksi()
	{
		$nama_knowledge = $this->input->post('nama_knowledge');
		$divisi = $this->input->post('divisi');
		$requester = $this->input->post('nama_knowledge');
		$tgl_request = $this->input->post('tgl_request');
		$data = array(
			'nama_knowledge' => $nama_knowledge,
			'divisi' => $divisi,
			'requester' => $requester,
			'tgl_request' => $tgl_request
		);
		$this->M_knowledge->insert($data, 'knowledge');
		redirect('knowledge/index');
	}
	function update() {
		$where = array('id' => $id);
		$data['knowledge'] = $this->M_knowledge->update($where,'knowledge')->result();
	}
	function uppload(){
		$id = $this->input->post('id');
		$upploader = $this->input->post('upploader');
		$tgl_uppload = $this->input->post('tgl_uppload');
		$data = array(
			'upploader' => $upploader,
			'tgl_uppload' => $tgl_uppload
		);
		$where = array(
			'id' => $id
		);
		$this->M_knowledge->uppload($where,$data,'knowledge');
		$this->load->view('uppload_knowledge', array('error' => ''));
		redirect('knowledge/index');
		if (! $this->uppload->do_uppload('berkas')){
			$error = array('error' => $this->uppload->display_errors());
			$this->load->view('uppload_knowledge', $error);
		}else{
			$data = array('uppload data' => $this->uppload->data());
			$this->load->view('uppload_knowledge_sukses', $data);
		}
	}
	
	function edit($id) {
		$where = array('id' => $id);
		$data['knowledge'] = $this->M_knowledge->edit($where,'knowledge')->result();
		$this->load->view('edit_knowledge',$data);
	}
	function hapus($id) {
		$where = array('id' => $id);
		$this->M_knowledge->delete($where,'knowledge');
		redirect('knowledge/index');
	} 
}
