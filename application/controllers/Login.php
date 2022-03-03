<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	// Definimos un constructor y cargamos el contructor de la clase padre
	public function __construct()
	{
		parent::__construct();
		// cargamos los helpers
		// Como pasamos varios helpers lo haremos en un array
		$this->load->helper(array('getmenu_helper'));
		// $this->load->helper('getmenu');
	}
	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('login', $data);
	}
}
