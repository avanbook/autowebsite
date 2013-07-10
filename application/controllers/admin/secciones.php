<?php

class Secciones extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/sec_model');
        $this->load->library('gf');
    }

    function index()
    {
        $this->lists();
    }

    function form($id = 0)
    {
        $this->gf->rol_check('admin', base_url());
        
        $cantidad                = $this->sec_model->count($id);
        //Variables tabla
        $data['sec_id_seccion']  = & $sec_id_seccion;
        $data['sec_nombre']      = & $sec_nombre;
        $data['sec_descripcion'] = & $sec_descripcion;
        $data['sec_url']         = & $sec_url;
        $data['sec_orden']       = & $sec_orden;

        //Variables a pasar segun la vista
        $data['title']  = & $title;
        $data['accion'] = & $accion;

        //Si es mayor a 0 es editar
        if ($cantidad > 0)
        {
            $row             = $this->sec_model->find($id);
            $sec_id_seccion  = $row['sec_id_seccion'];
            $sec_nombre      = $row['sec_nombre'];
            $sec_descripcion = $row['sec_descripcion'];
            $sec_url         = $row['sec_url'];
            $sec_orden       = $row['sec_orden'];

            $title  = "Editar seccion";
            $accion = "editar";
        }
        else
        {
            $title  = "Nueva seccion";
            $accion = "crear";
        }

        $data['view'] = "admin/secciones/secciones_form";
        $this->load->view('templates/temp_admin', $data);
    }

    function save()
    {
        $this->gf->rol_check('admin', base_url());
        
        $sec_id_seccion  = $this->input->post('sec_id_seccion');
        $sec_nombre      = $this->input->post('sec_nombre');
        $sec_descripcion = $this->input->post('sec_descripcion');
        $sec_url         = $this->input->post('sec_url');
        $sec_orden       = $this->input->post('sec_orden');

        $accion      = $this->input->post('accion');
        $datos_array = array(
            'sec_nombre'      => $sec_nombre,
            'sec_descripcion' => $sec_descripcion,
            'sec_url'         => $sec_url,
            'sec_orden'       => $sec_orden
        );

        if ($accion == 'crear')
        {
            $this->sec_model->insert($datos_array);
            redirect(base_url() . 'admin/secciones/lists/', 'refresh');
        }
        elseif ($accion == 'editar')
        {
            $this->sec_model->update($sec_id_seccion, $datos_array);
            redirect(base_url() . 'admin/secciones/lists/', 'refresh');
        }
        else
        {
            echo "error";
            exit();
        }
    }

    function lists()
    {
        $this->gf->rol_check('admin', base_url());
        
        $data['datos_array'] = $this->sec_model->find_all();
        $data['title']       = "Listado secciones";
        $data['view']        = "admin/secciones/secciones_list";
        $this->load->view('templates/temp_admin', $data);
    }

    function delete($id)
    {
        $this->gf->rol_check('admin', base_url());
        
        $this->sec_model->delete($id);
        redirect(base_url() . 'admin/secciones/lists/', 'refresh');
    }

}

?>