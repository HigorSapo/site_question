<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('parser');
	}

	public function index()
	{
		$data = array(
			'title'       => 'Question System',
			'author'      => 'Higor Roberto',
			'description' => 'Question System',
			'copyright'   => 'Copyright &copy; Question ' . date('Y')
		);
		
		$this->parser->parse('sistema/login', $data);
	}

}