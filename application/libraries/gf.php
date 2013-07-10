<?php

class Gf
{

    function c_select($var1, $var2)
    {
        if ($var1 == $var2)
            return "selected='selected'";
        else
            return "";
    }

    function c_check($var1, $var2)
    {
        if ($var1 == $var2)
            return "checked='checked'";
        else
            return "";
    }

    function rol_check($tipo, $base_url)
    {
        

        $CI    = & get_instance();
        $valor = $CI->session->userdata('autowebsite_in');
        
        if ($tipo == 'user')
        {
            if ($valor['usu_rol'] == 'user' || $valor['usu_rol'] == 'admin')
            {
                return true;
            }
            else
            {
                echo "Sin acceso, por favor logearse <a href='" . $base_url . "/login/'><b>aqui<b><a>";
                exit();
            }
        }
        elseif ($tipo == 'admin')
        {
            if ($valor['usu_rol'] == 'admin')
            {
                return true;
            }
            else
            {
                echo "Sin acceso, por favor logearse <a href='" . $base_url . "/login/'><b>aqui<b><a>";
                exit();
            }
        }
    }

    function fecha($fecha)
    {
        if ($fecha != "")
        {
            $fecha_array = explode("-", $fecha);
            $fecha       = $fecha_array[2] . "-" . $fecha_array[1] . "-" . $fecha_array[0];
            return $fecha;
        }
        else
        {
            return "";
        }
    }

    function fecha_hora($fecha)
    {
        if ($fecha != "")
        {
            $fecha_array = explode(" ", $fecha);
            $fecha_str   = $fecha_array[0];
            $hora_str    = $fecha_array[1];
            $fecha_str   = $this->fecha($fecha_str);
            $fecha_hora  = $fecha_str . " " . $hora_str;
            return $fecha_hora;
        }
        else
        {
            return "";
        }
    }

    function borrar_carpeta($dir)
    {
        $Res = false;

        if (file_exists($dir))
        {
            $dh = opendir($dir);

            while ($file = readdir($dh))
            {
                if ($file != "." && $file != "..")
                {
                    $fullpath = $dir . "/" . $file;

                    if (!is_dir($fullpath))
                    {
                        unlink($fullpath);
                    }
                    else
                    {
                        $this->borrar_carpeta($fullpath);
                    }
                }
            }

            closedir($dh);

            if (rmdir($dir))
            {
                $Res = true;
            }
        }

        return $Res;
    }

}

?>