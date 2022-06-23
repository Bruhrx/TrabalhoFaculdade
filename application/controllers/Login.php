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

	public function autenticacao()
	{
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');

		$usuario = $this->locadora->logarUsuario($email, $senha);


		if($usuario)
		{
			$this->session->set_userdata("usaurio logado", $usuario);
			$this->session->set_flashdata("success", "Logado Com Sucessso");
			echo "Usuario Logado";
			// redirect('homecontroller');
		}
		else
		{
			$this->session->set_flashdata("danger", "Credenciais Invalidas");
			echo "Credenciais Invalidas";
		}

	}

	public function logout()
	{
		$this->session->unset_userdata("usuario logado");
		$this->session->set_flashdata("success", 'Deslogado com sucesso');
		echo 'Deslogado com sucesso';
	}

}
