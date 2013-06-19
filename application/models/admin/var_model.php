<?php

class Var_model extends CI_Model
{

    const tabla    = 'variables';
    const id_tabla = 'var_id_variable';

    /* ------------------------ INSERTAR EN LA BASE DE DATOS----------------------- */

    function insert($row = array())
    {
        $this->db->insert(self::tabla, $row);
        return $this->db->insert_id();
    }

    /* ------------------------ BUSCAR POR ID-------------------------------------- */

    function find($id)
    {
        $query = sprintf("select * from %s where %s=%s", self::tabla, self::id_tabla, $id);
        $row   = $this->db->query($query);
        $row   = $row->row_array();
        return $row;
    }

    /* ------------------------ LISTAR TODOS LOS ELEMENTOS------------------------ */

    function find_all()
    {

        $query = sprintf("select * from %s", self::tabla);
        $rows  = $this->db->query($query);
        $rows  = $rows->result_array();
        return $rows;
    }
    
    //----------------------------------- INNER JOIN CON SECCION ------------------------------
    
    function find_all_inner_seccion()
    {
        $query="select * from variables inner join secciones on var_id_seccion=sec_id_seccion group by sec_id_seccion,var_id_variable";
        $rows = $this->db->query($query);
        $rows = $rows->result_array();
        return $rows;
    }
    
    /*--------------------------- LISTAR POR SECCION ---------------------------------------*/
    function find_by_seccion($var_id_seccion)
    {
        $query=  sprintf("select * from variables inner join secciones on sec_id_seccion=var_id_seccion where var_id_seccion=%s",$var_id_seccion);
        $rows = $this->db->query($query);
        $rows = $rows->result_array();
        return $rows;
        
    }
    
    /*--------------------------- BUSCAR POR NOMBRE VARIABLE ---------------------------------------*/
    function find_nombre($var_nombre)
    {
        $query=  sprintf("select var_descripcion from variables where var_nombre='%s'",$var_nombre);
        $rows = $this->db->query($query);
        $rows = $rows->row_array();
        return $rows['var_descripcion'];
        
    }

    /* ------------------------ MODIFICAR UN REGISTRO----------------------------- */

    function update($id, $row = array())
    {

        $this->db->where(self::id_tabla, $id);
        $this->db->update(self::tabla, $row);
    }

    /* ------------------------ ELIMINAR UN REGISTRO------------------------------- */

    function delete($id)
    {

        $query = sprintf("delete from %s where %s=%s", self::tabla, self::id_tabla, $id);
        $this->db->query($query);
    }

    /* ----------------------- SABER SI EXISTE UN ID ------------------------- */

    function count($id)
    {
        $query = sprintf("select count(*) as cantidad from  %s where %s=%s", self::tabla, self::id_tabla, $id);
        $row   = $this->db->query($query);
        $row   = $row->row_array();
        return $row['cantidad'];
    }

    

}

?>
