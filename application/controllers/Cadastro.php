<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require_once('models/model.php');

class cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view('users/cadastro');
	}

	public function cadastraUsuario()
	{
		$getDados = $this->input->post();
		$getDados = (object) $getDados;

		$this->load->model('locadoramodel', 'model'); //carrega o model

		$this->model->inserirDadosCadastro($getDados->nome, $getDados->email, $getDados->senha); //função do model


	}

}
