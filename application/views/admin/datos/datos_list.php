<div class="span12">
    <h4><?php echo $title ?></h4>
    <hr>
    <a href="<?php echo base_url() . 'datos/form' ?>" class="btn btn-primary">Crear datos web</a>
    <br>
    <br>
    <table class="table">
        <tr><th>ID</th><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th>Acción</th></tr>
        <?php foreach ($datos_array as $var): ?>
            <tr>
                <td><?php echo $var['dat_id_datos'] ?></td>
                <td><?php echo $var['dat_nombre'] ?></td>
                <td><?php echo $var['dat_direccion'] ?></td>
                <td><?php echo $var['dat_telefono'] ?></td>
                <td>
                    <a href="<?php echo base_url() . "datos/form/" . $var['dat_id_datos'] ?>"><i class="icon-edit"></i></a>&nbsp;&nbsp;
                    <a  href= "<?php echo base_url() . "datos/delete/" . $var['dat_id_datos'] ?>" ><i class="icon-remove"></i></a>&nbsp;&nbsp;
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
    <input type="hidden" name="accion" value="guardar">
</div>
