<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Close extends CI_Controller {
	//............................................................................
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login');
 }
	//............................................................................
	public function index()
	{
		if($this->session->userdata('acceso') == True)
		{
			$this->Model_login->logout();
			session_destroy();
			redirect(base_url(), 'refresh');
		}
		else
		{
			$this->load->view('error_403');
		}
	}
}
