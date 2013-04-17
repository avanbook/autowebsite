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

    function rol_check($tipo, $valor = array(), $base_url)
    {
        if ($tipo == 'user')
        {
            if ($valor['usu_rol'] == 'user' || $valor['usu_rol'] == 'admin')
            {
                return true;
            }
            else
            {
                echo "Sin acceso, por favor logearse <a href='" . $base_url . "'><b>aqui<b><a>";
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
                echo "Sin acceso, por favor logearse <a href='" . $base_url . "'><b>aqui<b><a>";
                exit();
            }
        }
    }

    function fecha($fecha)
    {
        if ($fecha != "")
        {
            $fecha_array = explode("-", $fecha);
            $fecha = $fecha_array[2] . "-" . $fecha_array[1] . "-" . $fecha_array[0];
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
            $fecha_str = $fecha_array[0];
            $hora_str = $fecha_array[1];
            $fecha_str = $this->fecha($fecha_str);
            $fecha_hora = $fecha_str . " " . $hora_str;
            return $fecha_hora;
        }
        else
        {
            return "";
        }
    }

    function count_llamadas($id_paciente)
    {
        $CI = & get_instance();
        $query = sprintf("select count(*) as cantidad from llamadas where id_paciente=%s", $id_paciente);
        $row = $CI->db->query($query);
        $row = $row->row();
        return $row->cantidad;
    }

    function horas_calculo($rows = array(), $hora_inicio = 0, $tabla='extrusion')
    {
        $i = 0;
        $inicio = "";
        $fin = "";
        $acumuladas=0;
        $resto_acumuladas=0;
        foreach ($rows as $var)
        {
            $i++;
            if ($i == 1)
            {
                $inicio = $hora_inicio;
                $fin = $inicio + $var;
                if ($fin >= 24)
                    $fin = $fin - 24;
            }
            else
            {
                $inicio = $fin;
                $fin = $inicio + $var;
                if ($fin >= 24)
                    $fin = $fin - 24;
            }
            $acumuladas = $acumuladas + $var;
            if ($acumuladas >= 24)
            {
                $resto_acumuladas = $acumuladas - 24;
                $acumuladas = 0;
            }
            else
            {
                $resto_acumuladas = -1;
            }

            $CI = & get_instance();
            
            switch ($tabla)
            {
                case 'extrusion':
                    $query=sprintf("update %s set ext_tiempo_produccion=%s, ext_inicio=%s, ext_fin=%s, ext_acumuladas where ext_id_produccion=%s",$tabla,$var['ext_tiempo_produccion'],$inicio,$fin,$acumuladas,$var['ext_id_produccion']);
                    break;
                case 'impresion':
                    $query=sprintf("update %s set imp_tiempo_produccion=%s, imp_inicio=%s, imp_fin=%s, imp_acumuladas where imp_id_produccion=%s",$tabla,$var['imp_tiempo_produccion'],$inicio,$fin,$acumuladas,$var['imp_id_produccion']);
                    break;
                case 'confeccion':
                    $query=sprintf("update %s set con_tiempo_produccion=%s, con_inicio=%s, con_fin=%s, con_acumuladas where con_id_produccion=%s",$tabla,$var['con_tiempo_produccion'],$inicio,$fin,$acumuladas,$var['con_id_produccion']);
                    break;
                case 'laminacion':
                    $query=sprintf("update %s set lam_tiempo_produccion=%s, lam_inicio=%s, lam_fin=%s, lam_acumuladas where lam_id_produccion=%s",$tabla,$var['lam_tiempo_produccion'],$inicio,$fin,$acumuladas,$var['lam_id_produccion']);
                    break;
                case 'refile':
                    $query=sprintf("update %s set ref_tiempo_produccion=%s, ref_inicio=%s, ref_fin=%s, ref_acumuladas where ref_id_produccion=%s",$tabla,$var['ref_tiempo_produccion'],$inicio,$fin,$acumuladas,$var['ref_id_produccion']);
                    break;
            }
            
            if ($acumuladas == 0)
                $acumuladas = $resto_acumuladas;
        }
    }

}

?>