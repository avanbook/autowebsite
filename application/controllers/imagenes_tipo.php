<?php

class Imagenes_tipo extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('it_model');
        $this->load->library('gf');
        $this->load->library('ftp');
        $this->load->config('generic_config');
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

        $data['it_ancho'] = & $it_ancho;
        $data['it_largo'] = & $it_largo;

        $data['it_ancho_thumb'] = & $it_ancho_thumb;
        $data['it_largo_thumb'] = & $it_largo_thumb;

        $data['it_con_thumb'] = & $it_con_thumb;


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

            $it_ancho = $row['it_ancho'];
            $it_largo = $row['it_largo'];

            $it_ancho_thumb = $row['it_ancho_thumb'];
            $it_largo_thumb = $row['it_largo_thumb'];

            $it_con_thumb = $row['it_con_thumb'];


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

        $it_gral_upload  = $this->input->post('it_gral_upload');
        $it_thumb_upload = $this->input->post('it_thumb_upload');
        $it_gral_url     = $this->input->post('it_gral_url');
        $it_thumb_url    = $this->input->post('it_thumb_url');

        $it_ancho = $this->input->post('it_ancho');
        $it_largo = $this->input->post('it_largo');

        $it_ancho_thumb = $this->input->post('it_ancho_thumb');
        $it_largo_thumb = $this->input->post('it_largo_thumb');

        $it_con_thumb = $this->input->post('it_con_thumb');

        $accion      = $this->input->post('accion');
        $datos_array = array(
            'it_nombre'       => $it_nombre,
            'it_descripcion'  => $it_descripcion,
            'it_gral_upload'  => $it_gral_upload,
            'it_thumb_upload' => $it_thumb_upload,
            'it_gral_url'     => $it_gral_url,
            'it_thumb_url'    => $it_thumb_url,
            'it_ancho'        => $it_ancho,
            'it_largo'        => $it_largo,
            'it_ancho_thumb'  => $it_ancho_thumb,
            'it_largo_thumb'  => $it_largo_thumb,
            'it_con_thumb'    => $it_con_thumb,
        );

        if ($accion == 'crear')
        {
            //Crear el directorio para subir imagenes de esta seccion
            $upload_directory       = $this->config->item('base_hosting') . "upload/" . $it_nombre . "/";
            $upload_directory_thumb = $this->config->item('base_hosting') . "upload/" . $it_nombre . "/thumb/";

            if ($it_con_thumb == 'si')
            {
                mkdir($upload_directory, 0777);
                mkdir($upload_directory_thumb, 0777);
            }
            else
            {
                mkdir($upload_directory, 0777);
            }
            
            $this->it_model->insert($datos_array);
            redirect(base_url() . 'imagenes_tipo/lists/', 'refresh');
        }
        elseif ($accion == 'editar')
        {
            $upload_directory_thumb = $this->config->item('base_hosting') . "upload/" . $it_nombre . "/thumb/";
            if ($it_con_thumb == 'si')
            {
                if(!is_dir($upload_directory_thumb))
                mkdir($upload_directory_thumb, 0777);
            }
            else
            {
                if(is_dir($upload_directory_thumb))
                    rmdir($upload_directory_thumb);
            }
            
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
        $row                    = $this->it_model->find($id);
        $upload_directory       = $this->config->item('base_hosting') . "upload/" . $row['it_nombre'] . "/";
        $upload_directory_thumb = $this->config->item('base_hosting') . "upload/" . $row['it_nombre'] . "/thumb/";

        if (is_dir($upload_directory))
            rmdir($upload_directory);
        if (is_dir($upload_directory_thumb))
            rmdir($upload_directory_thumb);

        $this->it_model->delete($id);
        //Borrar el directori
        redirect(base_url() . 'imagenes_tipo/lists/', 'refresh');
    }

}

?>