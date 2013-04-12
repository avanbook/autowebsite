<?php 
    class home extends CI_Controller
    {
        function index()
        {
            $this->home();
        }
        
        function home()
        {
            $this->load->view('website/home');
        }
        
        function contacto()
        {
            $this->load->view('website/contacto');
        }
        
        function fotos()
        {
            $this->load->view('website/fotos');
        }
        
        function lugar()
        {
            $this->load->view('website/lugar');
        }
        
        function servicios()
        {
            $this->load->view('website/servicios');
        }
        
        function ubicacion()
        {
            $this->load->view('webiste/ubicacion');
        }
        
        
    }

?>