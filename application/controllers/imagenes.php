<?php

class Imagenes extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('im_model');
        $this->load->config('generic_config');
    }

    function lists($im_tipo)
    {
        $data['datos_array'] = $this->im_model->find_tipo($im_tipo);
        $data['im_tipo']     = $im_tipo;
        $data['title']       = "Listado imagenes " . $im_tipo;
        $data['view']        = "admin/imagenes/imagenes_list";
        $this->load->view('admin/templates/temp_simple', $data);
    }

    function save()
    {

        $im_id_imagen = $this->input->post('im_id_imagen');
        $im_tipo      = $this->input->post('im_tipo');
        $tipo         = $this->input->post('tipo');

        $cantidad_fotos = 0;

        if (isset($_FILES['filesToUpload']['tmp_name']))
        {
            if (count($_FILES['filesToUpload']['tmp_name']))
            {
                $i = 0;
                foreach ($_FILES['filesToUpload']['tmp_name'] as $file)
                {
                    $i++;
                    $cantidad_fotos = $this->im_model->count_tipo($im_tipo);
                    $cantidad_fotos = $cantidad_fotos + 1;

                    $image_name  = "";
                    $thumb_chica = "";
                    if ($tipo == 'foto_comun')
                    {
                        if ($im_tipo == 'general')
                        {
                            $image_name  = $this->config->item('img_gral_upload') . $im_id_imagen . ".jpg";
                            //$thumb_grande = $this->config->item('upload_path_hab_thumb') . $id_habitacion . "_" . $nombre_imagen . "_p" . ".jpg";
                            $thumb_chica = $this->config->item('img_gral_thumb_upload') . $im_id_imagen . ".jpg";
                        }
                        elseif ($im_tipo == 'slider')
                        {
                            $image_name  = $this->config->item('img_slider_upload') . $im_id_imagen . ".jpg";
                            //$thumb_grande = $this->config->item('upload_path_hab_thumb') . $id_habitacion . "_" . $nombre_imagen . "_p" . ".jpg";
                            $thumb_chica = $this->config->item('img_slider_thumb_upload') . $im_id_imagen . ".jpg";
                        }
                    }
                    elseif ($tipo == 'foto_mas')
                    {
                        if ($im_tipo == 'general')
                        {
                            $image_name  = $this->config->item('img_gral_upload') . $cantidad_fotos . ".jpg";
                            //$thumb_grande = $this->config->item('upload_path_hab_thumb') . $id_habitacion . "_" . $cantidad_fotos . "_p" . ".jpg";
                            $thumb_chica = $this->config->item('img_gral_thumb_upload') . $cantidad_fotos . ".jpg";
                        }
                        elseif ($im_tipo == 'slider')
                        {
                            $image_name  = $this->config->item('img_slider_upload') . $cantidad_fotos . ".jpg";
                            //$thumb_grande = $this->config->item('upload_path_hab_thumb') . $id_habitacion . "_" . $cantidad_fotos . "_p" . ".jpg";
                            $thumb_chica = $this->config->item('img_slider_thumb_upload') . $cantidad_fotos . ".jpg";
                        }
                    }


                    $image      = ImageCreateFromJPEG($file);
                    //ancho
                    $width      = imagesx($image);
                    //alto imagen
                    $height     = imagesy($image);
                    //nuevo ancho imagen
                    $new_width  = 550;
                    //calcular alto 
                    $new_height = ($new_width * $height) / $width;
                    //crear imagen nueva
                    $thumb      = imagecreatetruecolor($new_width, $new_height);
                    //redimensiono
                    imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    //Guardo imagen final 
                    ImageJPEG($thumb, $image_name);

                    //Thumb
                    //nuevo ancho imagen
                    $new_width  = 100;
                    //calcular alto 
                    $new_height = ($new_width * $height) / $width;
                    //crear imagen nueva
                    $thumb      = imagecreatetruecolor($new_width, $new_height);
                    //redimensiono
                    imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    //Guardo imagen final 
                    ImageJPEG($thumb, $thumb_chica);

                    /* if ($i == 1 or $cantidad_fotos == 1 or $nombre_imagen == '1')
                      {
                      //Thumprincipal
                      //nuevo ancho imagen
                      $new_height = 270;
                      //calcular alto
                      $new_width  = ($new_height * $width) / $height;
                      //crear imagen nueva
                      $thumb      = imagecreatetruecolor($new_width, $new_height);
                      //redimensiono
                      imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                      //Guardo imagen final
                      ImageJPEG($thumb, $thumb_grande);
                      } */

                    if ($tipo == 'foto_mas')
                    {
                        $datos_array = array(
                            'im_id_imagen' => $cantidad_fotos,
                            'im_tipo'      => $im_tipo
                        );

                        $this->im_model->insert($datos_array);
                    }
                }
            }
        }
       redirect(base_url() . 'imagenes/lists/'.$im_tipo."/", 'refresh');
    }

    function delete($im_id_imagen = 0)
    {
        $im_tipo = $this->input->get('im_tipo');

        $this->im_model->delete($im_id_imagen);

        redirect(base_url() . 'imagenes/lists/'.$im_tipo."/", 'refresh');
    }

}

?>
