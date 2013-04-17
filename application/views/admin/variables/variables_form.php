<div class="span12">
    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>variables/save/">
        <div class="span12">
            <h4><?php echo $title ?></h4>
            <hr>
            <div class="control-group">
                <label class="control-label" >Nombre:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="var_nombre" value="<?php echo $var_nombre ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Descripción:</label>
                <div class="controls">
                    <textarea class="ckeditor" name="var_descripcion"><?php echo $var_descripcion ?></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Sección:</label>
                <div class="controls">
                    <select name="var_id_seccion">
                        <?php foreach ($secciones_array as $var): ?>
                        <option <?php echo $this->gf->c_select($var['sec_id_seccion'],$var_id_seccion) ?> value="<?php echo $var['sec_id_seccion'] ?>" ><?php echo $var['sec_nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="offset8"><button class="btn btn-large btn-primary" type="submit" >Guardar</button>&nbsp;&nbsp;<a class="btn btn-large btn-info" href="<?php echo base_url() . "variables/lists" ?>">Volver</a></div>
        </div>
        <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
        <input type="hidden" name="accion" value="<?php echo $accion ?>">
        <input type="hidden" name="var_id_variable" value="<?php echo $var_id_variable ?>">
    </form>
</div>
