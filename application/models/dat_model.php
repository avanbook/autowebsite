<?php

class Dat_model extends CI_Model
{

    const tabla    = 'datos';
    const id_tabla = 'dat_id_datos';

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

    
    /* ------------------------ TE DEVUELVE EL ULTIMO ENCONTRADO EN FORMA DE ROW------------------------ */

    function find_all_rows()
    {
        $query = sprintf("select * from %s", self::tabla);
        $rows  = $this->db->query($query);
        $rows  = $rows->row_array();
        return $rows;
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

    /*------------------- TRAER EL LISTADO COMPLETO DE DATOS PERO DEVOLVER EL UTLIMO ROW ------------------*/
    
    function find_all_row()
    {
        $query="select * from datos";
        $row = $this->db->query($query);
        $row = $row->row();
        
        return $row;
        
    }

}

?>
