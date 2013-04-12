<div class="span12">
    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>datos/save/">
        <div class="span12">
            <h4><?php echo $title ?></h4>
            <hr>
            <div class="control-group">
                <label class="control-label" >Nombre:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="dat_nombre" value="<?php echo $dat_nombre ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Dirección:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="dat_direccion" value="<?php echo $dat_direccion ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Teléfono:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="dat_telefono" value="<?php echo $dat_telefono ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Email:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="dat_email" value="<?php echo $dat_email ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Facebook:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="dat_facebook" value="<?php echo $dat_facebook ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Twitter:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"  name="dat_twitter" value="<?php echo $dat_twitter ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Gplus:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="dat_gplus" value="<?php echo $dat_gplus ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Localidad:</label>
                <div class="controls">
                    <input type="text" class="input-xxlarge"   name="dat_localidad" value="<?php echo $dat_localidad ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Coordenadas:</label>
                <div class="controls">
                    <input type="text"  class="input-xxlarge"  name="dat_coordenadas" value="<?php echo $dat_coordenadas ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Descripción:</label>
                <div class="controls">
                    <textarea class="ckeditor" name="dat_descripcion"><?php echo $dat_descripcion ?></textarea>
                </div>
            </div>
            <div class="offset8"><button class="btn btn-large btn-primary" type="submit" >Guardar</button>&nbsp;&nbsp;<a class="btn btn-large btn-info" href="<?php echo base_url() . "datos/lists" ?>">Volver</a></div>
        </div>
        <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
        <input type="hidden" name="accion" value="<?php echo $accion ?>">
        <input type="hidden" name="dat_id_datos" value="<?php echo $dat_id_datos ?>">
    </form>
</div>
