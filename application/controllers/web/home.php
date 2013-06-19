<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('gf');
        $this->load->model('im_model');
        $this->load->model('dat_model');
        $this->load->model('var_model');
        $this->load->model('sec_model');
        $this->load->config('generic_config');
    }

    function index()
    {
        $this->home();
    }

    function home()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row'] = $this->dat_model->find_all_rows();
        $data['home_head'] = $this->var_model->find_nombre('home_head'); 
        $data['slider_array'] = $this->im_model->find_tipo(1);
        $this->load->view('website/home_view', $data);
    }

    function cabanas()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row'] = $this->dat_model->find_all_rows();
        $data['cabanas_head'] = $this->var_model->find_nombre('cabanas_head');
        $data['cabanas_body'] = $this->var_model->find_nombre('cabanas_body');
        $data['slider_array'] = $this->im_model->find_tipo(1);
        $data['gral_array']   = $this->im_model->find_tipo(2);
        $this->load->view('website/cabanas_view', $data);
    }

    function contacto()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row'] = $this->dat_model->find_all_rows();
        $data['contacto_head'] = $this->var_model->find_nombre('contacto_head');
        $data['contacto_body'] = $this->var_model->find_nombre('contacto_body');
        $data['slider_array'] = $this->im_model->find_tipo(1);
        $data['gral_array']   = $this->im_model->find_tipo(2);
        $this->load->view('website/contacto_view', $data);
    }

    function fotos()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row'] = $this->dat_model->find_all_rows();
        $data['fotos_head'] = $this->var_model->find_nombre('fotos_head');
        $data['fotos_body'] = $this->var_model->find_nombre('fotos_body');
        $data['slider_array'] = $this->im_model->find_tipo(1);
        $data['gral_array']   = $this->im_model->find_tipo(2);
        $this->load->view('website/fotos_view', $data);
    }

    function lugar()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row'] = $this->dat_model->find_all_rows();
        $data['lugar_head'] = $this->var_model->find_nombre('lugar_head');
        $data['lugar_body'] = $this->var_model->find_nombre('lugar_body');
        $data['slider_array'] = $this->im_model->find_tipo(1);
        $data['gral_array']   = $this->im_model->find_tipo(2);
        $this->load->view('website/lugar_view', $data);
    }

    function servicios()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row'] = $this->dat_model->find_all_rows();
        $data['servicios_head'] = $this->var_model->find_nombre('servicios_head');
        $data['servicios_body'] = $this->var_model->find_nombre('servicios_body');
        $items =  $this->var_model->find_nombre('servicios_items');
        $items_explode = explode(",", $items);
        $data['servicios_items'] = $items_explode;
        $data['slider_array'] = $this->im_model->find_tipo(1);
        $data['gral_array']   = $this->im_model->find_tipo(2);
        $this->load->view('website/servicios_view', $data);
    }

    function ubicacion()
    {
        $data['secciones_array'] = $this->sec_model->find_all();
        $data['datos_row'] = $this->dat_model->find_all_rows();
        $data['ubicacion_head'] = $this->var_model->find_nombre('ubicacion_head');
        $data['ubicacion_body'] = $this->var_model->find_nombre('ubicacion_body');
        $this->load->view('website/ubicacion_view',$data);
    }

}

?>