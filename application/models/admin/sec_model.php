<?php

class Sec_model extends CI_Model
{

    const tabla = 'secciones';
    const id_tabla = 'sec_id_seccion';

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
        $row = $this->db->query($query);
        $row = $row->row_array();
        return $row;
    }

    /* ------------------------ LISTAR TODOS LOS ELEMENTOS------------------------ */

    function find_all()
    {

        $query = sprintf("select * from %s order by sec_orden ", self::tabla);
        $rows = $this->db->query($query);
        $rows = $rows->result_array();
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

    /* ------------------------ CONTAR RESULTADOS TRAIDOS------------------------------- */

    function count($id = -1)
    {
        if ($id == -1)
        {
            $query = sprintf("select count(*) as cantidad from %s", self::tabla);
        }
        else
        {
            $query = sprintf("select count(*) as cantidad from %s where %s=%s", self::tabla, self::id_tabla, $id);
        }

        $row = $this->db->query($query);
        $row = $row->row_array();
        return $row['cantidad'];
    }
    
    function sec_nombre_return($sec_id_seccion)
    {
        $query=sprintf("select sec_nombre from secciones where sec_id_seccion=%s",$sec_id_seccion);
        $row = $this->db->query($query);
        $row = $row->row_array();
        return $row['sec_nombre'];
    }
    

}

?>