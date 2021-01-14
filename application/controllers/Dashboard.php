<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	//............................................................................
	public function index()
	{
		if($this->session->userdata('acceso') == True)
		{
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('dashboard');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('error_403');
			$this->load->view('footer');
		}
	}
}
