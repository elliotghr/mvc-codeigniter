<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_user extends CI_Migration
{
    // Todo lo que va en el metodo up es lo que se ejecutará como instrucciones para crear nuestra tabla
    // Si ocurre un error con el metodo up consultar:
    // elseif ( ! in_array($method, array_map('strtolower', get_class_methods($class))))
    public function up()
    {
        // utiliza una clase dbforge para manejar en clases nuestras snetencias
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'nombre_usuario' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'correo' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'conrasena' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'null' => TRUE,
            ),
            'range' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
        ));
        // Para especificar la llave primaria
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('Usuarios');
    }
    // Todo lo que va en el metodo down sería lo contrario a up, para poder bajar en las versiones de mi sentenia

    public function down()
    {
        $this->dbforge->drop_table('Usuarios');
    }
}
