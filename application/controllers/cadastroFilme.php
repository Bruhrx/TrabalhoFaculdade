<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastroFilme extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Locadoramodel', 'locadora');//aqui ele carrega o Model onde esta a logica do banco de dados
	}


	public function index()
	{
		$this->load->view('filmes/cadastroFilme');
	}

	public function getFilmes()
	{
		$getDadosFilmes = $this->input->post();
		$getDadosFilmes = (object) $getDadosFilmes;

		$this->locadora->cadastraFilmes($getDadosFilmes->titulo, $getDadosFilmes->genero);
	}
}
