<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cargamos los helpers
        // Como pasamos varios helpers lo haremos en un array
        $this->load->helper(array('getmenu_helper'));
        $this->load->database();
    }

    public function index()
    {
        $data['menu'] = main_menu();
        $this->load->view('registro', $data);
        // Pasamos el nombre de la tabla al metodo get
        $query = $this->db->get('usuarios');
        // Imprimimos el resultado de dicho query generado
        var_dump($query->result());
    }

    // Creo un metodo para mi formulario
    public function create()
    {
        // Recibo los datos por el metodo post y los almaceno en una variable
        $username = $this->input->post('username');
        $email = $this->input->post('email',);
        $password = $this->input->post('password');
        var_dump(
            $username,
            $email,
            $password,
        );
    }
}
