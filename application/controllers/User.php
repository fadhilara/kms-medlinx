<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url');
		
}
	public function index(){	
		$data['user'] = $this->M_user->tampil_data('user')->result();
        $this->load->view('header');
		$this->load->view('user', $data);
		$this->load->view('footer');
	}
	public function create()
	{
		$this->load->view('header');
		$this->load->view('create_user');
		$this->load->view('footer');
	}
	public function create_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$divisi = $this->input->post('divisi');
		$level = $this->input->post('level');
		$password = $this->input->post('password');

		$data = array(
				'nama' => $nama,
				'email' => $email,
				'divisi' => $divisi,
				'level' => $level,
				'password' => $password 
		);
		//insert data ke database
		$this->m_user->insert_data($data, 'user');

		//mengalihkan halaman ke halaman notulen rapat
		redirect(base_url().'user');
	} 

	public function edit($id)
	{
			$where = array(
				'id_user' => $id,
			);
			$data['user'] = $this->m_user->edit_data($where, 'user')->result();
		$this->load->view('header');
		$this->load->view('edit_user',$data);
		$this->load->view('footer');
	}
	public function update(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$divisi = $this->input->post('divisi');
		$level = $this->input->post('level');
		$password = $this->input->post('password');

			$where = array(
					'id_user' => $id,
			);

		$data = array(
				'nama' => $nama,
				'email' => $email,
				'divisi' => $divisi,
				'level' => $level,
				'password' => $password 
		);
		//insert data ke database
		$this->m_user->update_data($where, $data, 'user');

		//mengalihkan halaman ke halaman notulen rapat
		redirect(base_url().'user');
	} 

	public function delete($id){
		$where = array(
			'id_user' => $id
		);

		// menghapus data anggota dari database sesuai id
		$this->m_user->delete_data($where,'user');

		// mengalihkan halaman ke halaman data anggota
		redirect(base_url().'user');
	} 
}