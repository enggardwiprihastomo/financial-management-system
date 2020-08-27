<?php 

class c_lock extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_siskeufatek"));
		}
	}

	function dataadmin(){
		$this->load->view('dataadmin');
	}
	function dataumum(){
		$this->load->view('dataumum');
	}
}