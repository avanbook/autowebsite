<?php

class Datos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('dat_model');
    }

    function index()
    {
        $this->lists();
    }
    
    
    function form($dat_id_datos = 0)
    {
        $cantidad                = $this->dat_model->count($dat_id_datos);
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

        //Si es mayor a 0 es editar
        if ($cantidad > 0)
        {
            $row             = $this->dat_model->find($dat_id_datos);
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

            $title  = "Editar datos página";
            $accion = "editar";
        }
        else
        {
            $title  = "Nuevo datos página";
            $accion = "crear";
        }

        $data['view'] = "admin/datos/datos_form";
        $this->load->view('admin/templates/temp_simple', $data);
    }

    function save()
    {
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

        $accion = $this->input->post('accion');

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


        if ($accion == 'crear')
        {
            $this->dat_model->insert($datos_array);
            redirect(base_url() . 'admin/datos/lists/', 'refresh');
        }
        elseif ($accion == 'editar')
        {
            $this->dat_model->update($dat_id_datos,$datos_array);
            redirect(base_url() . 'admin/datos/lists/', 'refresh');
        }
        else
        {
            echo "error";
            exit();
        }
    }
    
    function lists()
    {
        $data['datos_array']=$this->dat_model->find_all();
        $data['title']="Listado datos web";
        $data['view']="admin/datos/datos_list";
        $this->load->view('admin/templates/temp_simple',$data);
    }
    
    function delete($dat_id_datos)
    {
        $this->dat_model->delete($dat_id_datos);
        redirect(base_url() . 'admin/datos/lists/', 'refresh');
    }

}

?>
