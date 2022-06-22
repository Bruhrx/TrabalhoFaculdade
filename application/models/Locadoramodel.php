<?php

class Locadoramodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listaUsuario()
    {
      // FUNCAO REALIAZA "SELECT * FROM locadora
		  return $this->db->get('usuario')->result_array();

    }

    public function loginUsuario($email, $senha)
    {
      $this->db->where("email", $email);
      $this->db->where("senha", $senha);
      $usuario = $this->db->get('usuario')->row_array();

      return $usuario;
    }

    public function inserirDadosCadastro($nome, $email, $senha)
    {

      $dadosUsuario =
      [
        'nome'=>$nome,
        'email'=>$email,
        'senha'=>$senha
      ];

      $this->db->insert('usuario', $dadosUsuario);

    }

    public function listaFilmes()
    {
      return $this->db->get('filme')->result_array();
    }

    public function cadastraFilmes($titulo, $genero)
    {
      $dadosFilme =
      [
        'nomeFilme'=>$titulo,
        'categoria'=>$genero,
      ];

      $this->db->insert('filme', $dadosFilme);
    }

    public function deletarFilme($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete('filme');
    }

    public function deletarUser($id)
    {
      $this->db->where("id", $id);
      return $this->db->delete('usuario');
    }

}

