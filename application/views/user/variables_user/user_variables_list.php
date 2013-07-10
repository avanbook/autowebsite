<div class="span12">
    <h4><?php echo $title ?></h4>
    <table class="table">
        <tr><th>Título</th><th>Seccion</th><th>Acción</th></tr>
        <?php foreach ($datos_array as $var): ?>
            <tr>
                <td><?php echo $var['var_titulo'] ?></td>
                <td><?php echo $var['sec_nombre'] ?></td>
                <td>
                    <a title="modificar" href="<?php echo base_url() . "user/variables_user/form/" . $var['var_id_variable'] ?>"><i class="icon-edit"></i></a>&nbsp;&nbsp;
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
    <input type="hidden" name="accion" value="guardar">
</div>
