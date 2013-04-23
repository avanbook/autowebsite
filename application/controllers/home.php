<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('gf');
        $this->load->model('im_model');
        $this->load->model('dat_model');
        $this->load->config('generic_config');
    }

    function index()
    {
        $this->home();
    }

    function home()
    {
        $datos_row = $this->dat_model->find_all_rows();
        $home_row = 

        $data['slider_array'] = $this->im_model->find_tipo(1);
        $this->load->view('website/home_view', $data);
    }

    function cabanas()
    {
        $data['slider_array'] = $this->im_model->find_tipo('slider');
        $data['gral_array']   = $this->im_model->find_tipo('general');
        $this->load->view('website/cabanas_view', $data);
    }

    function contacto()
    {
        $data['slider_array'] = $this->im_model->find_tipo('slider');
        $data['gral_array']   = $this->im_model->find_tipo('general');
        $this->load->view('website/contacto_view', $data);
    }

    function fotos()
    {
        $data['slider_array'] = $this->im_model->find_tipo('slider');
        $data['gral_array']   = $this->im_model->find_tipo('general');
        $this->load->view('website/fotos_view', $data);
    }

    function lugar()
    {
        $data['slider_array'] = $this->im_model->find_tipo('slider');
        $data['gral_array']   = $this->im_model->find_tipo('general');
        $this->load->view('website/lugar_view', $data);
    }

    function servicios()
    {
        $data['slider_array'] = $this->im_model->find_tipo('slider');
        $data['gral_array']   = $this->im_model->find_tipo('general');
        $this->load->view('website/servicios_view', $data);
    }

    function ubicacion()
    {
        $this->load->view('website/ubicacion_view');
    }

}

?>