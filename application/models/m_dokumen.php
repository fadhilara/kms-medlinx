<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen extends CI_Model{

	public function __construct() {
		parent::__construct();
		//melakukan koneksi database
		$this->load->database();
	}
	public function tampil_data() {
		//ambil semua data tabel knowledge
		return $this->db->get('dokumen');
	}
	
		public function insert($data, $table) {
			//melakukan insert ke tabel knowledgee
			return $this->db->insert($table,$data);
		}
		public function update($data,$where) {
			//melakukan update ke tabel knowledge
			
			$belumadafile = $_GET['belum ada file'];
			$belumdivalidasi = $_GET['belum di validasi'];
			$tervalidasi = $_GET['tervalidasi'];
			$id = $_GET['id_dokumen'];

			if($belumadafile)
			{
				$this->db->set('status', $belumadafile);
				$this->db->where('id_dokumen', $id);
				$this->db->update('dokumen');
			}
			else if($belumdivalidasi)
			{
				
				$this->db->set('status', $belumdivalidasi);
				$this->db->where('id_dokumen', $id);
				$this->db->update('dokumen');
			
			}
			else if($tervalidasi)
			{
				
				$this->db->set('status', $tervalidasi);
				$this->db->where('id_dokumen', $id);
				$this->db->update('dokumen');
			
			}
		}
		function uppload ($where, $table) {
			$this->db->where($where);
			$this->db->update($table);
		}
		function edit($where, $table) {
			return $this->db->get_where($table,$where);
		}
		
		function delete_data($where,$table){
		$this->db->delete($table,$where);
		}
		
	}

