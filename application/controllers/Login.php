<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Model_login');
 	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function validate()
	{
		$form_usuario  = $this->input->post('usuario');
		$form_password = $this->input->post('password');
		//--
		$this->Model_login->get_usuarios($form_usuario, $form_password);
	}
}
