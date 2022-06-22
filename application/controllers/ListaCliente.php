<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listacliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Locadoramodel', 'locadora');//aqui ele carrega o Model onde esta a logica do banco de dados
	}

	public function index()
	{
		$dados ['listaCliente'] = $this->locadora->listaUsuario(); //o $this->locadora->listaUsuario(); é a funcao onde retorna pra mim os dados do banco de dados
		$this->load->view('users/listaCliente', $dados);
	}


	public function deleteUser($id)
	{
		$this->locadora->deletarUser($id);
		redirect('listacliente');
	}
}
