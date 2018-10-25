<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('parser');
	}

	public function cadastro()
	{
		$data = array(
			'title'       => 'Question System',
			'author'      => 'Higor Roberto',
			'description' => 'Question System',
			'copyright'   => 'Copyright &copy; Question ' . date('Y')
		);

		$this->parser->parse('empresa/cadastro', $data);
	}

	public function cadastroEmpresa()
	{
		$this->load->model('Empresa_model');
		$this->Empresa_model->setEmpresa();
	}

}