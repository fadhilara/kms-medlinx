<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notulen_rapat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_notulen_rapat');
		$this->load->helper('url');
}
	public function index()
	{
		$data['notulen_rapat'] = $this->m_notulen_rapat->ambil_data()->result();
		$this->load->view('header');
		$this->load->view('notulen_rapat.php', $data);
		$this->load->view('footer');
	}
	 public function create(){
		
			$this->load->view('header');
			$this->load->view('create_notulen_rapat');
			$this->load->view('footer');
	}
	public function create_aksi(){
		$jenis_rapat = $this->input->post('jenis_rapat');
		$isi_notulen_rapat = $this->input->post('isi_notulen_rapat');
		$tanggal_rapat = $this->input->post('tanggal_rapat');
		$nama_notulen = $this->input->post('nama_notulen');

		$data = array(
				'jenis_rapat' => $jenis_rapat,
				'isi_notulen_rapat' => $isi_notulen_rapat,
				'tanggal_rapat' => $tanggal_rapat,
				'nama_notulen' => $nama_notulen 
		);
		//insert data ke database
		$this->m_notulen_rapat->insert_data($data, 'notulen_rapat');

		//mengalihkan halaman ke halaman notulen rapat
		redirect(base_url().'notulen_rapat');
	}

	public function edit($id)
	{
		$where = array(
			'id_notulen_rapat' => $id,
		);
		//mengambil data dari database sesuai id
		$data['notulen_rapat'] = $this->m_notulen_rapat->edit_data($where, 'notulen_rapat')->result();
		$this->load->view('header');
			$this->load->view('edit_notulen_rapat', $data);
			$this->load->view('footer');
	} 

	public function update() {
		$id_notulen_rapat = $this->input->post('id_notulen_rapat');
		$jenis_rapat = $this->input->post('jenis_rapat');
		$isi_notulen_rapat = $this->input->post('isi_notulen_rapat');
		$tanggal_rapat = $this->input->post('tanggal_rapat');
		$nama_notulen = $this->input->post('nama_notulen');

		$where = array(
				'id_notulen_rapat' => $id_notulen_rapat
		);
		
		$data = array(
				'jenis_rapat' => $jenis_rapat,
				'isi_notulen_rapat' => $isi_notulen_rapat,
				'tanggal_rapat' => $tanggal_rapat,
				'nama_notulen' => $nama_notulen
		);

		//update data ke database
		$this->m_notulen_rapat->update($where, $data, 'notulen_rapat');
		//mengalihkan halaman ke halaman data anggota
		redirect(base_url().'notulen_rapat/index');
	}

	function delete($id){
		$where = array(
			'id_notulen_rapat' => $id
		);

		// menghapus data anggota dari database sesuai id
		$this->m_notulen_rapat->delete_data($where,'notulen_rapat');

		// mengalihkan halaman ke halaman data anggota
		redirect(base_url().'notulen_rapat');
	} 

}