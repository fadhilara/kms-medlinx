<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_informasi');
			$this->load->helper('url');
}
	public function index()
	{
		$data['informasi'] = $this->m_informasi->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('informasi', $data);
		$this->load->view('footer');
	}

	public function create()
	{
		$this->load->view('header');
		$this->load->view('create_informasi');
		$this->load->view('footer');
	} 
	public function create_aksi(){
		$judul_informasi = $this->input->post('judul_informasi');
		$isi_informasi = $this->input->post('isi_informasi');
		$diposting_oleh = $this->input->post('diposting_oleh');
		$tanggal_posting = date_create_from_format('d-m-Y');
		$waktu_posting = date('h:i:s');

		$data = array(
				'judul_informasi' => $judul_informasi,
				'isi_informasi' => $isi_informasi,
				'diposting_oleh' => $diposting_oleh,
				'tanggal_posting' => $tanggal_posting,
				'waktu_posting' => $waktu_posting 
		);
		//insert data ke database
		$this->m_informasi->insert_data($data, 'informasi');

		//mengalihkan halaman ke halaman notulen rapat
		redirect(base_url().'informasi');
	} 

	public function edit($id)
	{
		$where = array(
			'id_informasi' => $id,
		);
		// mengambil data dari database sesuai id
		$data['informasi'] = $this->m_informasi->edit_data($where,'informasi')->result();
		$this->load->view('header');
		$this->load->view('edit_informasi',$data);
		$this->load->view('footer');
	}
		public function update(){
		$judul_informasi = $this->input->post('judul_informasi');
		$isi_informasi = $this->input->post('isi_informasi');
		$diposting_oleh = $this->input->post('diposting_oleh');
		$tanggal_posting = date('y-m-d');
		$waktu_posting = date('h:i:s');

			$where = array(
					'id_informasi' => $id,
			);

		$data = array(
				'judul_informasi' => $judul_informasi,
				'isi_informasi' => $isi_informasi,
				'diposting_oleh' => $diposting_oleh,
				'tanggal_posting' => $tanggal_posting,
				'waktu_posting' => $waktu_posting 
		);
		//insert data ke database
		$this->m_informasi->update_data($where, $data, 'informasi');

		//mengalihkan halaman ke halaman notulen rapat
		redirect(base_url().'informasi');
	} 
	public function delete($id){
		$where = array(
			'id_informasi' => $id
		);

		// menghapus data anggota dari database sesuai id
		$this->m_informasi->delete_data($where,'informasi');

		// mengalihkan halaman ke halaman data anggota
		redirect(base_url().'informasi');
	} 
}