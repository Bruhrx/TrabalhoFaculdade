<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('locadoramodel','locadora');

	}

	public function index()
	{
		$this->load->view('users/login');
	}

	public function autenticar()
	{
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');

		$usuario = $this->locadora->logarUsuario($email, $senha);

		// print_r($usuario); exit;

		if($usuario)
		{
			// echo 123;
			$this->session->set_userdata("usuario logado", $usuario);
			$this->session->set_flashdata("success", "Logado Com Sucessso");
		}
		else
		{
			$this->session->set_flashdata("danger", "Credenciais Invalidas");
		}
		redirect('cadastro');
	}

	public function logout()
	{
		$this->session->unset_userdata("usuario logado");
		$this->session->set_flashdata('success', "Deslogado com sucesso");
		redirect('/');
	}

}
