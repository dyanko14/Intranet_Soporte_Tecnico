<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Close extends CI_Controller {
	//............................................................................
	public function __construct()
	{
		parent::__construct();
 }
	//............................................................................
	public function index()
	{
		if($this->session->userdata('acceso') == True)
		{
			session_destroy();
			redirect(base_url(), 'refresh');
		}
		else
		{
			$this->load->view('error_403');
		}
	}
}
