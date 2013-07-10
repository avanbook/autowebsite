<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/usu_model');
        $this->load->library('form_validation');
        $this->load->library('gf');
    }

    function index()
    {
        $a = $this->session->userdata('autowebsite_in');
        if ($a == '')
            $this->login();
        else
        if ($a['usu_rol'] == 'user')
            redirect(base_url() . 'user/datos_user/form/', 'refresh');
        else if ($a['usu_rol'] == 'admin')
            redirect(base_url() . 'admin/datos/', 'refresh');
    }

    function login()
    {
        $data['title'] = 'Loguearse';
        $data['view']  = 'admin/login/login_form';
        $this->load->view('templates/temp_simple', $data);
    }

    function verificar()
    {
        //This method will have the credentials validation

        $this->form_validation->set_rules('usu_nick', 'Usuario', 'trim|required|xss_clean');
        $this->form_validation->set_rules('usu_clave', 'Clave', 'trim|required|xss_clean|callback_verificar_bd');
        if ($this->form_validation->run() == FALSE)
        {
            //Field validation failed.&nbsp; User redirected to login page
            $data['title'] = 'Loguearse';
            $data['view']  = 'admin/login/login_form';
            $this->load->view('templates/temp_simple', $data);
        }
        else
        {
            $a = $this->session->userdata('autowebsite_in');
            //Go to private area
            if ($a['usu_rol'] == 'user')
                redirect(base_url() . 'user/datos_user/form/', 'refresh');
            else if ($a['usu_rol'] == 'admin')
                redirect(base_url() . 'admin/datos/', 'refresh');
            else
                $this->login();
        }
    }

    function verificar_bd($u_clave)
    {
        $u_nick = $this->input->post('usu_nick');

        //query the database
        $row = $this->usu_model->login($u_nick, $u_clave);

        if ($row)
        {
            $sess_array = array(
                'id_usuario' => $row->usu_id_usuario,
                'usu_nick'   => $row->usu_nick,
                'usu_clave'  => $row->usu_clave,
                'usu_rol'    => $row->usu_rol,
                'usu_nombre' => $row->usu_nombre
            );
            $this->session->set_userdata('autowebsite_in', $sess_array);

            return TRUE;
        }
        else
        {

            $this->form_validation->set_message('verificar_bd', 'Usuario o clave incorrecta');
            return false;
        }
    }

    function salir()
    {
        $this->session->unset_userdata('autowebsite_in');
        redirect(base_url() . "index.html", 'refresh');
    }

}

?>
