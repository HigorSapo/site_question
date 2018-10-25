<?php

class Empresa_model extends CI_Model
{
	private $id;
	private $login;
	private $senha;
	private $nomeEmpresa;
	private $cnpj;
	private $cep;
	private $endereco;
	private $cidade;
	private $bairro;
	private $uf;
	private $numero;
	private $complemento;
	private $telefone;

	public function __construct()
	{
		parent::__construct();

		$this->id          = isset($_POST['id']) ? $_POST['id'] : '';
		$this->login       = isset($_POST['login']) ? $_POST['login'] : '';
		$this->senha       = isset($_POST['senha']) ? sha1($_POST['senha']) : '';
		$this->nomeEmpresa = isset($_POST['nomeEmpresa']) ? $_POST['nomeEmpresa'] : '';
		$this->cnpj        = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';
		$this->cep         = isset($_POST['cep']) ? $_POST['cep'] : '';
		$this->endereco    = isset($_POST['endereco']) ? $_POST['endereco'] : '';
		$this->cidade      = isset($_POST['cidade']) ? $_POST['cidade'] : '';
		$this->bairro      = isset($_POST['bairro']) ? $_POST['bairro'] : '';
		$this->uf          = isset($_POST['uf']) ? $_POST['uf'] : '';
		$this->numero      = isset($_POST['numero']) ? $_POST['numero'] : '';
		$this->complemento = isset($_POST['complemento']) ? $_POST['complemento'] : '';
		$this->telefone    = isset($_POST['telefone']) ? $_POST['telefone'] : '';
	}

	public function setEmpresa()
	{
		$data = array(
			'login'        => $this->login,
			'senha'        => $this->senha,
			'nome_empresa' => $this->nomeEmpresa,
			'cnpj'         => $this->cnpj,
			'cep'          => $this->cep,
			'endereco'     => $this->endereco,
			'cidade'       => $this->cidade,
			'bairro'       => $this->bairro,
			'uf'           => $this->uf,
			'numero'       => $this->numero,
			'complemento'  => $this->complemento,
			'telefone'     => $this->telefone
		);

		$this->db->insert('empresa', $data);
		return $this->responseJson('0', 'OK');
	}

	private function responseJson($numErro, $response)
	{
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array
			(
				'erro' 		=> $numErro,
				'response' 	=> $response
			)));
	}

}