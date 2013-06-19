<?php

class Variables_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('var_model');
        $this->load->model('sec_model');
        $this->load->library('gf');
    }

    function index()
    {
        $this->lists();
    }

    function form($var_id_variable = 0)
    {
        $var_id_seccion_get = $this->input->get('var_id_seccion');


        $cantidad                = $this->var_model->count($var_id_variable);
        //Variables tabla
        $data['var_id_variable'] = & $var_id_variable;
        $data['var_nombre']      = & $var_nombre;
        $data['var_descripcion'] = & $var_descripcion;
        $data['var_id_seccion']  = & $var_id_seccion;
        $data['var_titulo']      = & $var_titulo;
        $data['var_html']        = & $var_html;
        //Variables a pasar segun la vista
        $data['title']           = & $title;
        $data['accion']          = & $accion;

        $row             = $this->var_model->find($var_id_variable);
        $var_id_variable = $row['var_id_variable'];
        $var_nombre      = $row['var_nombre'];
        $var_descripcion = $row['var_descripcion'];
        $var_id_seccion  = $row['var_id_seccion'];
        $var_titulo      = $row['var_titulo'];
        $var_html        = $row['var_html'];
        $title           = "Editar variable página";
        $accion          = "editar";

        //En el caso de crear un variable de una seccion predeterminada
        $data['var_id_seccion_get'] = $var_id_seccion_get;

        $data['view'] = "user/variables_user/variables_form";
        $data['js']   = array('js/ckeditor/ckeditor');
        $this->load->view('admin/templates/temp_simple', $data);
    }

    function save()
    {
        $var_id_variable = $this->input->post('var_id_variable');
        $var_nombre      = $this->input->post('var_nombre');
        $var_descripcion = $this->input->post('var_descripcion');
        $var_id_seccion  = $this->input->post('var_id_seccion');

        $var_titulo = $this->input->post('var_titulo');
        $var_html   = $this->input->post('var_html');

        if ($var_html == 'no')
        {
            $var_descripcion = strip_tags($var_descripcion);
        }

        $datos_array = array(
            'var_nombre'      => $var_nombre,
            'var_descripcion' => $var_descripcion,
            'var_id_seccion'  => $var_id_seccion,
            'var_titulo'      => $var_titulo,
            'var_html'        => $var_html
        );

        $this->var_model->update($var_id_variable, $datos_array);
        redirect(base_url() . 'user/variables_user/lists/', 'refresh');
    }

    function find_var_nombre($var_nombre)
    {
        $query = sprintf("select * from variables where var_nombre='%s'", $var_nombre);
        $row   = $this->db->query($query);
        $row   = $row->row_result();
        return $row;
    }

    function lists()
    {
        $data['datos_array'] = $this->var_model->find_all_inner_seccion();
        $data['title']       = "Listado variables web";
        $data['view']        = "user/variables_user/variables_list";
        $this->load->view('admin/templates/temp_simple', $data);
    }

}

?>