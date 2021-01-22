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

		/*	$config['protocol'] = 'smtp';
			$config['mailpath'] = 'smtp.office365.com';
			$config['charset'] = 'utf-8';
			$config['smtp_port'] = '587';
			$config['smtp_user'] = 'dcisneros@grupoact.com';
			$config['smtp_pass'] = 'Office@2021';
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);

			$this->load->library('email');
			$this->email->from('dcisneros@grupoact.com', 'Dyanko Cisneros');
			$this->email->to('dyanko14@gmail.com');
			//$this->email->cc('another@another-example.com');
			//$this->email->bcc('them@their-example.com');
			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');
			$this->email->send(); */

		}
		else
		{
			$this->load->view('header');
			$this->load->view('error_403');
			$this->load->view('footer');
		}
	}
}
