
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Entradas extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $output = (object) array('output' => '', 'js_files' => array(), 'css_files' => array());

        $this->cargar_vista($output);
    }

    function cargar_vista($output = null) {

        $this->load->view('entrada.php', $output);
    }

    public function manager_entradas() {
        $this->grocery_crud->set_theme('flexigrid');

        $this->grocery_crud->set_table('entrada');
        $this->grocery_crud->columns('Tipo','Nombre','Descripcion','Contenido','Tags','Fecha','Imagen','Categoria_id');
        $this->grocery_crud->display_as('Categoria_id', 'Categoria Nombre');
        $this->grocery_crud->set_subject('entrada');
        $this->grocery_crud->set_relation('Categoria_id', 'Categoria', 'Nombre');
        
        $this->grocery_crud->set_field_upload('Imagen','assets/uploads/imagenes');
        $output = $this->grocery_crud->render();

        $this->cargar_vista($output);
    }

    public function manager_categorias() {
        $this->grocery_crud->set_theme('flexigrid');
        $this->grocery_crud->set_table('categoria');
        $output = $this->grocery_crud->render();
        $this->cargar_vista($output);
    }

}
