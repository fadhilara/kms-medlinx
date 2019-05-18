<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {

	function __construct(){
		parent::__construct();
}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
}