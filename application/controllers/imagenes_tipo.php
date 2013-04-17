<?php

class Imagenes_tipo extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('it_model');
        $this->load->library('gf');
    }

    function index()
    {
        $this->lists();
    }

    function form($id = 0)
    {
        $cantidad                  = $this->it_model->count($id);
        //Variables tabla
        $data['it_id_imagen_tipo'] = & $it_id_imagen_tipo;
        $data['it_nombre']         = & $it_nombre;
        $data['it_descripcion']    = & $it_descripcion;

        $data['it_gral_upload']  = & $it_gral_upload;
        $data['it_thumb_upload'] = & $it_thumb_upload;
        $data['it_gral_url']     = & $it_gral_url;
        $data['it_thumb_url']    = & $it_thumb_url;


        //Variables a pasar segun la vista
        $data['title']  = & $title;
        $data['accion'] = & $accion;

        //Si es mayor a 0 es editar
        if ($cantidad > 0)
        {
            $row               = $this->it_model->find($id);
            $it_id_imagen_tipo = $row['it_id_imagen_tipo'];
            $it_nombre         = $row['it_nombre'];
            $it_descripcion    = $row['it_descripcion'];

            $it_gral_upload  = $row['it_gral_upload'];
            $it_thumb_upload = $row['it_thumb_upload'];
            $it_gral_url     = $row['it_gral_url'];
            $it_thumb_url    = $row['it_thumb_url'];


            $title  = "Editar seccion";
            $accion = "editar";
        }
        else
        {
            $title  = "Nueva seccion";
            $accion = "crear";
        }

        $data['view'] = "imagenes_tipo/imagenes_tipo_form";
        $this->load->view('admin/templates/temp_simple', $data);
    }

    function save()
    {
        $it_id_imagen_tipo = $this->input->post('it_id_imagen_tipo');
        $it_nombre         = $this->input->post('it_nombre');
        $it_descripcion    = $this->input->post('it_descripcion');
        
        $it_gral_upload    = $this->input->post('it_gral_upload');
        $it_thumb_upload    = $this->input->post('it_thumb_upload');
        $it_gral_url    = $this->input->post('it_gral_url');
        $it_thumb_url    = $this->input->post('it_thumb_url');
        

        $accion      = $this->input->post('accion');
        $datos_array = array(
            'it_nombre'       => $it_nombre,
            'it_descripcion'  => $it_descripcion,
            'it_gral_upload'  => $it_gral_upload,
            'it_thumb_upload' => $it_thumb_upload,
            'it_gral_url'     => $it_gral_url,
            'it_thumb_url'    => $it_thumb_url,
        );

        if ($accion == 'crear')
        {
            $this->it_model->insert($datos_array);
            redirect(base_url() . 'imagenes_tipo/lists/', 'refresh');
        }
        elseif ($accion == 'editar')
        {
            $this->it_model->update($it_id_imagen_tipo, $datos_array);
            redirect(base_url() . 'imagenes_tipo/lists/', 'refresh');
        }
        else
        {
            echo "error";
            exit();
        }
    }

    function lists()
    {
        $data['datos_array'] = $this->it_model->find_all();
        $data['title']       = "Listado imagenes_tipo";
        $data['view']        = "imagenes_tipo/imagenes_tipo_list";
        $this->load->view('admin/templates/temp_simple', $data);
    }

    function delete($id)
    {
        $this->it_model->delete($id);
        redirect(base_url() . 'imagenes_tipo/lists/', 'refresh');
    }

}

?>