<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {
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
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('cuenta');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('error_403');
			$this->load->view('footer');
		}
	}
	//............................................................................
	public function update()
	{
		if($this->session->userdata('acceso') == True)
		{
			//--Retrieve data
			$form_id_usuario   = $this->input->post('id_usuario');
			$form_password_old = $this->input->post('password_old');
			$form_password_new = $this->input->post('password_new');
			$form_password_re  = $this->input->post('password_re');
			$data['polizas']   = $this->Model_login->update_usuario($form_id_usuario, $form_password_old, $form_password_new, $form_password_re);
			//--
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('error_403');
			$this->load->view('footer');
		}
	}
	//............................................................................
	public function update_ok()
	{
		if($this->session->userdata('acceso') == True)
		{
			$this->load->view('header');
			$this->load->view('update_ok');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('error_403');
			$this->load->view('footer');
		}
	}
	//............................................................................
	public function update_fail_actual()
	{
		if($this->session->userdata('acceso') == True)
		{
			$this->load->view('header');
			$this->load->view('update_fail_actual');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('error_403');
			$this->load->view('footer');
		}
	}
	//............................................................................
	public function update_fail_compare()
	{
		if($this->session->userdata('acceso') == True)
		{
			$this->load->view('header');
			$this->load->view('update_fail_compare');
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
