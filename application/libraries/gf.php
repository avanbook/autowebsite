<?php
class Gf
{
    function c_select($var1,$var2)
    {
        if($var1==$var2)
            return "selected='selected'";
        else
            return "";
    }
    function c_check($var1,$var2)
    {
        if($var1==$var2)
            return "checked='checked'";
        else
            return "";
    }
    
    function na($var)
    {
        if($var=="")
            return '0';
        else
            return $var;
    }
     
    function rol_check($tipo,$valor=array(),$base_url)
    {
        if($tipo=='user')
        {
            if($valor['usu_rol']=='user' || $valor['usu_rol']=='admin')
            {
                return true;
            }
            else
            {
                echo "Sin acceso, por favor logearse <a href='".$base_url."'><b>aqui<b><a>";
                exit();
            }
        }
        elseif($tipo=='admin')
        {
            if($valor['usu_rol']=='admin')
            {
                return true;
            }
            else
            {
                echo "Sin acceso, por favor logearse <a href='".$base_url."'><b>aqui<b><a>";
                exit();
            }
        }
    }
    
    function fecha($fecha)
    {
        if($fecha!="")
        {
        $fecha_array = explode("-", $fecha);
        $fecha = $fecha_array[2]."-".$fecha_array[1]."-".$fecha_array[0];
        return $fecha;
        }
        else
        {
            return "";
        }
    }
    
    function fecha_hora($fecha)
    {
        if($fecha!="")
        {
            $fecha_array=explode(" ", $fecha);
            $fecha_str=$fecha_array[0];
            $hora_str=$fecha_array[1];
            $fecha_str=$this->fecha($fecha_str);
            $fecha_hora=$fecha_str." ".$hora_str;
            return $fecha_hora;
        }
        else
        {
            return "";
        }
    }
    
    
     function color_tr($var1,$var2)
    {
        if($var1===$var2)
        {
            return "";
        }
        else 
        {
           return "success";  
        }
            
    }
    
    function visar_ea_valores($var_p,$var_v)
    {
        if($var_p==0 && $var_v==1)
        {
          return 0;  
        }
        elseif($var_p==1 && $var_v==0)
        {
            return 0;
        }
        elseif($var_p==1 && $var_v==1)
        {
            return 1;
        }
        else
        {
            return 1;
        }
    }
    
    function count_llamadas($id_paciente)
    {
        $CI =& get_instance();
        $query=sprintf("select count(*) as cantidad from llamadas where id_paciente=%s",$id_paciente);
        $row = $CI->db->query($query);
        $row = $row->row();
        return $row->cantidad;
    }

    
}
?>
