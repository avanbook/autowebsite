<?php

class Datos_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/dat_model');
        $this->load->model('admin/var_model');
    }

    function index()
    {
        $this->form();
    }

    function save()
    {
        $this->gf->rol_check('user', base_url());
        
        $dat_id_datos    = $this->input->post('dat_id_datos');
        $dat_nombre      = $this->input->post('dat_nombre');
        $dat_direccion   = $this->input->post('dat_direccion');
        $dat_telefono    = $this->input->post('dat_telefono');
        $dat_email       = $this->input->post('dat_email');
        $dat_facebook    = $this->input->post('dat_facebook');
        $dat_twitter     = $this->input->post('dat_twitter');
        $dat_gplus       = $this->input->post('dat_gplus');
        $dat_localidad   = $this->input->post('dat_localidad');
        $dat_coordenadas = $this->input->post('dat_coordenadas');
        $dat_descripcion = $this->input->post('dat_descripcion');

        $datos_array = array(
            'dat_nombre'      => $dat_nombre,
            'dat_direccion'   => $dat_direccion,
            'dat_telefono'    => $dat_telefono,
            'dat_email'       => $dat_email,
            'dat_facebook'    => $dat_facebook,
            'dat_twitter'     => $dat_twitter,
            'dat_gplus'       => $dat_gplus,
            'dat_localidad'   => $dat_localidad,
            'dat_coordenadas' => $dat_coordenadas,
            'dat_descripcion' => $dat_descripcion,
        );

        $this->dat_model->update($dat_id_datos, $datos_array);
        redirect(base_url() . 'user/datos_user/form/', 'refresh');
    }

    function form()
    {
        $this->gf->rol_check('user', base_url());
        
        //Variables tabla
        $data['dat_id_datos']    = & $dat_id_datos;
        $data['dat_nombre']      = & $dat_nombre;
        $data['dat_direccion']   = & $dat_direccion;
        $data['dat_telefono']    = & $dat_telefono;
        $data['dat_email']       = & $dat_email;
        $data['dat_facebook']    = & $dat_facebook;
        $data['dat_twitter']     = & $dat_twitter;
        $data['dat_gplus']       = & $dat_gplus;
        $data['dat_localidad']   = & $dat_localidad;
        $data['dat_coordenadas'] = & $dat_coordenadas;
        $data['dat_descripcion'] = & $dat_descripcion;

        //Variables a pasar segun la vista
        $data['title']  = & $title;
        $data['accion'] = & $accion;

        $row             = $this->dat_model->find(1);
        $dat_id_datos    = $row['dat_id_datos'];
        $dat_nombre      = $row['dat_nombre'];
        $dat_direccion   = $row['dat_direccion'];
        $dat_telefono    = $row['dat_telefono'];
        $dat_email       = $row['dat_email'];
        $dat_facebook    = $row['dat_facebook'];
        $dat_twitter     = $row['dat_twitter'];
        $dat_gplus       = $row['dat_gplus'];
        $dat_localidad   = $row['dat_localidad'];
        $dat_coordenadas = $row['dat_coordenadas'];
        $dat_descripcion = $row['dat_descripcion'];

        $data['js'] = array('js/ckeditor/ckeditor');
        $title        = "Editar datos página";
        $accion       = "editar";
        $data['view'] = "user/datos_user/user_form";
        $this->load->view('templates/temp_user', $data);
    }


}

?>
