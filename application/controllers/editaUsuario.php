<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editaUsuario extends CI_Controller {

	public function index()
	{
		$this->load->view('users/editaUsuario');
	}

	public function editarUsuario()
	{
		$getDados = $this->input->post();

		print_r($getDados); exit;
	}
}
