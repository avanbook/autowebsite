<!---------------------------FORMULARIOS--------------------------------------->
<!---------------------------TITULO-------------------------------------------->
<div class="page-header">
    <h1><?php echo "$title" ?></h1>
</div>
<!---------------------------CONTENIDO----------------------------------------->
<a href="<?php echo base_url() . 'admin/secciones/form' ?>" class="btn btn-primary">
    Crear seccion
</a>
<br>
<br>
<table class="table">
    <tr><th>ID</th><th>Nombre</th><th>Url</th><th>Acción</th></tr>
    <?php foreach ($datos_array as $var): ?>
        <tr>
            <td><?php echo $var['sec_orden'] ?></td>
            <td><?php echo $var['sec_nombre'] ?></td>
            <td><?php echo $var['sec_url'] ?></td>
            <td>
                <a href="<?php echo base_url() . "admin/secciones/form/" . $var['sec_id_seccion'] ?>"><i class="icon-edit"></i></a>&nbsp;&nbsp;
                <a href="<?php echo base_url() . "admin/variables/form/?var_id_seccion=" . $var['sec_id_seccion'] ?>"><i class="icon-plus-sign"></i></a>&nbsp;&nbsp;
                <a href="<?php echo base_url() . "admin/variables/list_seccion/" . $var['sec_id_seccion']."/" ?>"><i class="icon-chevron-right"></i></a>&nbsp;&nbsp;
                <a href="<?php echo base_url() . "admin/secciones/delete/" . $var['sec_id_seccion'] ?>"><i class="icon-remove"></i></a>&nbsp;&nbsp;
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<input type="hidden" id="base_url" value="<?php echo base_url() ?>">
<input type="hidden" name="accion" value="guardar">
</div>