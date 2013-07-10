<div class="row-fluid">
    <div class="span12">
        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>user/variables_user/save/">
            <div class="span12">
                <h4><?php echo $title ?></h4>
                <hr>
                <?php if ($var_html == 'no') : ?>
                    <div class="control-group">
                        <label class="control-label" >Descripción:</label>
                        <div class="controls">
                            <textarea class="input-xxlarge" name="var_descripcion"><?php echo $var_descripcion ?></textarea>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="control-group">
                        <label class="control-label" >Descripción:</label>
                        <div class="controls">
                            <textarea class="ckeditor" id="var_descripcion"  name="var_descripcion"><?php echo $var_descripcion ?></textarea>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="offset8"><button class="btn btn-large btn-primary" type="submit" >Guardar</button>&nbsp;&nbsp;<a class="btn btn-large btn-info" href="<?php echo base_url() . "user/variables_user/lists" ?>">Volver</a></div>
            </div>
            <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
            <input type="hidden" name="accion" value="<?php echo $accion ?>">
            <input type="hidden" name="var_html" value="<?php echo $var_html ?>">
            <input type="hidden" name="var_id_seccion" value="<?php echo $var_id_seccion ?>">
            <input type="hidden" name="var_id_variable" value="<?php echo $var_id_variable ?>">
        </form>
    </div>
</div>

