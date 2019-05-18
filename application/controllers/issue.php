<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class issue extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_issue');
			$this->load->helper('url');
}
	public function index()
	{
		$data['issue'] = $this->m_issue->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('issue', $data);
		$this->load->view('footer');
	}
	public function create()
	{
		$this->load->view('header');
		$this->load->view('create_issue');
		$this->load->view('footer');
	}
	public function create_aksi(){
		$nama_issue = $this->input->post('nama_issue');
		$client = $this->input->post('client');
		$permasalahan = $this->input->post('permasalahan');
		$solusi = $this->input->post('solusi');
		$dibuat_oleh = $this->input->post('dibuat_oleh');
		$tanggal_dibuat = date('d-m-y');


		$data = array(
				'nama_issue' => $nama_issue,
				'client' => $client,
				'permasalahan' => $permasalahan,
				'solusi' => $solusi,
				'dibuat_oleh' => $dibuat_oleh,
				'tanggal_dibuat' => $tanggal_dibuat
		);
		//insert data ke database
		$this->m_issue->insert_data($data, 'issue');

		//mengalihkan halaman ke halaman notulen rapat
		redirect(base_url().'issue');
	}  

	public function edit($id)
	{
		$where = array(
			'id_issue' => $id,
		);
		// mengambil data dari database sesuai id
		$data['issue'] = $this->m_issue->edit_data($where,'issue')->result();
		$this->load->view('header');
		$this->load->view('edit_issue',$data);
		$this->load->view('footer');
	}
		public function update(){
		$nama_issue = $this->input->post('nama_issue');
		$client = $this->input->post('client');
		$permasalahan = $this->input->post('permasalahan');
		$solusi = $this->input->post('solusi');
		$dibuat_oleh = $this->input->post('dibuat_oleh');
		$tanggal_dibuat = date('d-m-y');

			$where = array(
					'id_issue' => $id,
			);

		$data = array(
				'nama_issue' => $nama_issue,
				'client' => $client,
				'permasalahan' => $permasalahan,
				'solusi' => $solusi,
				'dibuat_oleh' => $dibuat_oleh,
				'tanggal_dibuat' => $tanggal_dibuat 
		);
		//insert data ke database
		$this->m_issue->update_data($where, $data, 'isue');

		//mengalihkan halaman ke halaman notulen rapat
		redirect(base_url().'issue');
}
	public function delete($id){
		$where = array(
			'id_issue' => $id
		);

		// menghapus data anggota dari database sesuai id
		$this->m_issue->delete_data($where,'issue');

		// mengalihkan halaman ke halaman data anggota
		redirect(base_url().'issue');
	} 
}