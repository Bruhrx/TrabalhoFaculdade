<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaFilmes extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Locadoramodel', 'locadora');

	}

	public function index()
	{
		$dados ['ListaFilmes'] = $this->locadora->ListaFilmes();
		$this->load->view('filmes/listaFilmes', $dados);
	}

	public function deleteFilme($id)
	{
		$this->locadora->deletarFilme($id);
		redirect('listafilmes');
	}

}
