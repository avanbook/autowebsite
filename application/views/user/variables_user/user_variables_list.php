<div class="span12">
    <h4><?php echo $title ?></h4>
    <hr>
    <a href="<?php echo base_url() . 'user/variables_user/form' ?>" class="btn btn-primary">Crear variable web</a>
    <br>
    <br>
    <table class="table">
        <tr><th>ID</th><th>Nombre</th><th>Título</th><th>Seccion</th><th>Acción</th></tr>
        <?php foreach ($datos_array as $var): ?>
            <tr>
                <td><?php echo $var['var_id_variable'] ?></td>
                <td><?php echo $var['var_nombre'] ?></td>
                <td><?php echo $var['var_titulo'] ?></td>
                <td><?php echo $var['sec_nombre'] ?></td>
                <td>
                    <a href="<?php echo base_url() . "user/variables_user/form/" . $var['var_id_variable'] ?>"><i class="icon-edit"></i></a>&nbsp;&nbsp;
                    <a href= "<?php echo base_url() . "user/variables_user/delete/" . $var['var_id_variable'] ?>" ><i class="icon-remove"></i></a>&nbsp;&nbsp;
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
    <input type="hidden" name="accion" value="guardar">
</div>
