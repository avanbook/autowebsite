<?php

class Variables extends CI_Controller
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
        $this->gf->rol_check('admin', base_url());
        
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
        //Si es mayor a 0 es editar
        if ($cantidad > 0)
        {
            $row             = $this->var_model->find($var_id_variable);
            $var_id_variable = $row['var_id_variable'];
            $var_nombre      = $row['var_nombre'];
            $var_descripcion = $row['var_descripcion'];
            $var_id_seccion  = $row['var_id_seccion'];
            $var_titulo      = $row['var_titulo'];
            $var_html        = $row['var_html'];
            $sec_nombre = $this->sec_model->sec_nombre_return($var_id_seccion);
            $title           = "Editar variable seccion   ".strtoupper($sec_nombre);
            $accion          = "editar";
        }
        else
        {
            $title                      = "Nueva variable página";
            $accion                     = "crear";
        }
        //En el caso de crear un variable de una seccion predeterminada
        $data['var_id_seccion_get'] = $var_id_seccion_get;
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['view']            = "admin/variables/variables_form";
        $data['js']              = array('js/ckeditor/ckeditor');
        $this->load->view('templates/temp_admin', $data);
    }

    function save()
    {
        $this->gf->rol_check('admin', base_url());
        
        $var_id_variable = $this->input->post('var_id_variable');
        $var_nombre      = $this->input->post('var_nombre');
        $var_descripcion = $this->input->post('var_descripcion');
        $var_id_seccion  = $this->input->post('var_id_seccion');

        $var_titulo = $this->input->post('var_titulo');
        $var_html   = $this->input->post('var_html');
        
        if($var_html=='no')
        {
            $var_descripcion=  strip_tags($var_descripcion);
        }

        $accion = $this->input->post('accion');

        $datos_array = array(
            'var_nombre'      => $var_nombre,
            'var_descripcion' => $var_descripcion,
            'var_id_seccion'  => $var_id_seccion,
            'var_titulo'      => $var_titulo,
            'var_html'        => $var_html
        );
        if ($accion == 'crear')
        {
            $this->var_model->insert($datos_array);
            redirect(base_url() . 'admin/variables/lists/', 'refresh');
        }
        elseif ($accion == 'editar')
        {
            $this->var_model->update($var_id_variable, $datos_array);
            redirect(base_url() . 'admin/variables/lists/', 'refresh');
        }
        else
        {
            echo "error";
            exit();
        }
    }

    function  find_var_nombre($var_nombre)
    {
        $this->gf->rol_check('admin', base_url());
        
        $query=sprintf("select * from variables where var_nombre='%s'",$var_nombre);
        $row = $this->db->query($query);
        $row = $row->row_result();
        return $row;
    }


    function lists()
    {
        $this->gf->rol_check('admin', base_url());
        
        $data['datos_array'] = $this->var_model->find_all_inner_seccion();
        $data['title']       = "Listado variables web";
        $data['view']        = "admin/variables/variables_list";
        $this->load->view('templates/temp_admin', $data);
    }

    function list_seccion($var_id_seccion=0)
    {
        $this->gf->rol_check('admin', base_url());
        
        $data['datos_array'] = $this->var_model->find_by_seccion($var_id_seccion);
        $data['title']       = "Listado variables web";
        $data['view']        = "admin/variables/variables_list";
        $this->load->view('templates/temp_admin', $data);
    }

    function delete($dat_id_datos)
    {
        $this->gf->rol_check('admin', base_url());
        
        $this->var_model->delete($dat_id_datos);
        redirect(base_url() . 'admin/variables/lists/', 'refresh');
    }

}

?>