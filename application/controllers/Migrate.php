<?php

class Migrate extends CI_Controller
{

    public function index()
    {
        // Carga la librería de migración
        $this->load->library('migration');
        // Si ocurre un error durante la migracion mostrará el error, si no, hará la migración
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        }
    }
}
