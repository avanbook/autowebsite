<?php

class Variables extends CI_Controller
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
        $cantidad                = $this->var_model->count($var_id_variable);
        //Variables tabla
        $data['var_id_variable'] = & $var_id_variable;
        $data['var_nombre']      = & $var_nombre;
        $data['var_descripcion'] = & $var_descripcion;
        $data['var_id_seccion'] = & $var_id_seccion;
        //Variables a pasar segun la vista
        $data['title']  = & $title;
        $data['accion'] = & $accion;
        //Si es mayor a 0 es editar
        if ($cantidad > 0)
        {
            $row             = $this->var_model->find($var_id_variable);
            $var_id_variable = $row['var_id_variable'];
            $var_nombre      = $row['var_nombre'];
            $var_descripcion = $row['var_descripcion'];
            $var_id_seccion = $row['var_id_seccion'];
            $title  = "Editar variable página";
            $accion = "editar";
        }
        else
        {
            $title  = "Nueva variable página";
            $accion = "crear";
        }
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['view'] = "admin/variables/variables_form";
        $data['js']=array('js/ckeditor/ckeditor');
        $this->load->view('admin/templates/temp_simple', $data);
    }

    function save()
    {
        $var_id_variable = $this->input->post('var_id_variable');
        $var_nombre      = $this->input->post('var_nombre');
        $var_descripcion = $this->input->post('var_descripcion');
        $var_id_seccion = $this->input->post('var_id_seccion');

        $accion = $this->input->post('accion');

        $datos_array = array(
            'var_nombre'    => $var_nombre,
            'var_descripcion' => $var_descripcion,
            'var_id_seccion' => $var_id_seccion
        );
        if ($accion == 'crear')
        {
            $this->var_model->insert($datos_array);
            redirect(base_url() . 'variables/lists/', 'refresh');
        }
        elseif ($accion == 'editar')
        {
            $this->var_model->update($var_id_variable, $datos_array);
            redirect(base_url() . 'variables/lists/', 'refresh');
        }
        else
        {
            echo "error";
            exit();
        }
    }

    function lists()
    {
        $data['datos_array'] = $this->var_model->find_all();
        $data['title']       = "Listado variables web";
        $data['view']        = "admin/variables/variables_list";
        $this->load->view('admin/templates/temp_simple', $data);
    }

    function delete($dat_id_datos)
    {
        $this->var_model->delete($dat_id_datos);
        redirect(base_url() . 'variables/lists/', 'refresh');
    }

}

?>