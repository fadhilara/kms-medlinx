<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
}
