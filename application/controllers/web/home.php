<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('gf');
        $this->load->model('admin/im_model');
        $this->load->model('admin/dat_model');
        $this->load->model('admin/var_model');
        $this->load->model('admin/sec_model');
        $this->load->config('generic_config');
    }

    function index()
    {
        $this->home();
    }

    function home()
    {
        
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row']       = $this->dat_model->find_all_rows();
        $data['home_head']       = $this->var_model->find_nombre('home_head');
        $data['slider_array']    = $this->im_model->find_tipo(1);
        $data['title']="Cabañas HUARACO  || San Rafael Mendoza";
        $data['view']            = "website/home_content";
        $this->load->view('website/templates/temp_menu', $data);
    }

    function cabanas()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row']       = $this->dat_model->find_all_rows();
        $data['cabanas_head']    = $this->var_model->find_nombre('cabanas_head');
        $data['cabanas_body']    = $this->var_model->find_nombre('cabanas_body');
        $data['slider_array']    = $this->im_model->find_tipo(1);
        $data['gral_array']      = $this->im_model->find_tipo(2);
        $data['title']="El Lugar || Cabañas HUARACO  || San Rafael Mendoza";
        $data['view']            = "website/cabanas_content";
        $this->load->view('website/templates/temp_menu', $data);
    }

    function contacto()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row']       = $this->dat_model->find_all_rows();
        $data['contacto_head']   = $this->var_model->find_nombre('contacto_head');
        $data['contacto_body']   = $this->var_model->find_nombre('contacto_body');
        $data['slider_array']    = $this->im_model->find_tipo(1);
        $data['gral_array']      = $this->im_model->find_tipo(2);
        $data['title']="Contacto || Cabañas HUARACO  || San Rafael Mendoza";
        $data['view']            = "website/contacto_content";
        $this->load->view('website/templates/temp_menu', $data);
    }

    function fotos()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row']       = $this->dat_model->find_all_rows();
        $data['fotos_head']      = $this->var_model->find_nombre('fotos_head');
        $data['fotos_body']      = $this->var_model->find_nombre('fotos_body');
        $data['slider_array']    = $this->im_model->find_tipo(1);
        $data['gral_array']      = $this->im_model->find_tipo(2);
        $data['view']            = "website/fotos_content";
        $data['title']="Fotos || Cabañas HUARACO  || San Rafael Mendoza";
        $this->load->view('website/templates/temp_menu', $data);
    }

    function lugar()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row']       = $this->dat_model->find_all_rows();
        $data['lugar_head']      = $this->var_model->find_nombre('lugar_head');
        $data['lugar_body']      = $this->var_model->find_nombre('lugar_body');
        $data['slider_array']    = $this->im_model->find_tipo(1);
        $data['gral_array']      = $this->im_model->find_tipo(2);
        $data['view']            = "website/lugar_content";
        $data['title']="El Lugar || Cabañas HUARACO  || San Rafael Mendoza";
        $this->load->view('website/templates/temp_menu', $data);
    }

    function servicios()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row']       = $this->dat_model->find_all_rows();
        $data['servicios_head']  = $this->var_model->find_nombre('servicios_head');
        $data['servicios_body']  = $this->var_model->find_nombre('servicios_body');
        $items                   = $this->var_model->find_nombre('servicios_items');
        $items_explode           = explode(",", $items);
        $data['servicios_items'] = $items_explode;
        $data['slider_array']    = $this->im_model->find_tipo(1);
        $data['gral_array']      = $this->im_model->find_tipo(2);
        $data['view']            = "website/servicios_content";
        $data['title']="Servicios || Cabañas HUARACO  || San Rafael Mendoza";
        $this->load->view('website/templates/temp_menu', $data);
    }

    function ubicacion()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row']       = $this->dat_model->find_all_rows();
        $data['ubicacion_head']  = $this->var_model->find_nombre('ubicacion_head');
        $data['ubicacion_body']  = $this->var_model->find_nombre('ubicacion_body');
        $data['slider_array']    = $this->im_model->find_tipo(1);
        $data['view']            = "website/ubicacion_content";
        $data['title']="Ubicación || Cabañas HUARACO  || San Rafael Mendoza";
        $this->load->view('website/templates/temp_menu', $data);
    }
    
    function prueba()
    {
        $this->load->view('website/prueba');
    }

}

?>