<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polizas extends CI_Controller {
	//............................................................................
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_polizas');
 }
	//............................................................................
	public function index()
	{
		if($this->session->userdata('acceso') == True)
		{
			//--Retrieve data
			$data['polizas'] = $this->Model_polizas->get_polizas();
			//--
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('polizas', $data);
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
	public function ver($id_poliza = null)
	{
		if($this->session->userdata('acceso') == True)
		{
			//--Retrieve data
			$data['polizas'] = $this->Model_polizas->get_poliza_data($id_poliza);
			$data['polizas_dias_restantes'] = $this->Model_polizas->get_poliza_dias_restantes($id_poliza);
			$data['polizas_dias_transcurridos'] = $this->Model_polizas->get_poliza_dias_transcurridos($id_poliza);
			$data['polizas_proyectos'] = $this->Model_polizas->get_poliza_proyectos($id_poliza);
			$data['polizas_servicios'] = $this->Model_polizas->get_poliza_servicios($id_poliza);
			//--
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('polizas_ver', $data);
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
