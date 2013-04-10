<?php

class Im_model extends CI_Model
{

    const tabla    = 'imagenes';
    const id_tabla = 'im_id_imagen';

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
    
    /* ------------------------ LISTAR TODOS LOS ELEMENTOS POR TIPO IMAGEN------------------------ */

    function find_tipo($im_tipo)
    {

        $query = sprintf("select * from imagenes where im_tipo='%s'",$im_tipo);
        $rows  = $this->db->query($query);
        $rows  = $rows->result_array();
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
    
    // ----------------------------------  CONTAR IMAGENES POR TIPO ------------------------------//
    
    function count_tipo($im_tipo)
    {
        $query=sprintf("select count(*) as cantidad from imagenes where im_tipo='%s'",$im_tipo);
        $row = $this->db->query($query);
        $row = $row->row_array();
        return $row['cantidad'];
    }
    

    

}

?>
