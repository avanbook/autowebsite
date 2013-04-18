<?php
class Prueba extends CI_Controller
{
    function index()
    {
        
        $upload_directory='/var/www/autowebsite/upload/culo/';
        mkdir($upload_directory,0777);
    }
}
 
?>
