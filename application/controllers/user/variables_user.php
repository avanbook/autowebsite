<?php

class Variables_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/var_model');
        $this->load->model('admin/sec_model');
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
        $data['var_descripcion'] = & $var_descripcion;
        $data['var_html']        = & $var_html;
        $data['var_id_seccion']  = & $var_id_seccion;
        //Variables a pasar segun la vista
        $data['title']           = & $title;
        $data['accion']          = & $accion;

        $row             = $this->var_model->find($var_id_variable);
        $var_id_variable = $row['var_id_variable'];
        $var_descripcion = $row['var_descripcion'];
        $var_html        = $row['var_html'];
        $var_id_seccion  = $row['var_id_seccion'];
        $sec_nombre      = $this->sec_model->sec_nombre_return($var_id_seccion);
        $title           = "Editar variable seccion   " . strtoupper($sec_nombre);
        $accion          = "editar";



        $data['view'] = "user/variables_user/user_variables_form";
        $data['js']   = array('js/ckeditor/ckeditor','js/user/user_variables_form');
        $this->load->view('templates/temp_user', $data);
    }

    function save()
    {
        $var_id_variable = $this->input->post('var_id_variable');
        $var_descripcion = $this->input->post('var_descripcion');
        $var_id_seccion  = $this->input->post('var_id_seccion');

        $var_html = $this->input->post('var_html');

        if ($var_html == 'no')
        {
            $var_descripcion = strip_tags($var_descripcion);
        }

        $datos_array = array(
            'var_descripcion' => $var_descripcion,
            'var_id_seccion'  => $var_id_seccion,
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
        $data['view']        = "user/variables_user/user_variables_list";
        $this->load->view('templates/temp_user', $data);
    }

}

?>