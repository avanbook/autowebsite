<!---------------------------FORMULARIOS--------------------------------------->
<!---------------------------TITULO-------------------------------------------->
<div class="page-header">
    <h1><?php echo "$title" ?></h1>
</div>
<!---------------------------CONTENIDO----------------------------------------->
<form class="form-horizontal" method="post" action="<?php echo base_url() ?>imagenes_tipo/save/">
    <div class="control-group">
        <label class="control-label" >Nombre:</label>
        <div class="controls">
            <input type="text" name="it_nombre" value="<?php echo $it_nombre ?>">
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" >Upload path general:</label>
        <div class="controls">
            <input type="text" name="it_gral_upload" value="<?php echo $it_gral_upload ?>">
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" >Upload path thumbs:</label>
        <div class="controls">
            <input type="text" name="it_thumb_upload" value="<?php echo $it_thumb_upload ?>">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" >Ancho:</label>
        <div class="controls">
            <input type="text" name="it_ancho" value="<?php echo $it_ancho ?>">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" >Largo:</label>
        <div class="controls">
            <input type="text" name="it_largo" value="<?php echo $it_largo ?>">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" >Ancho thumb:</label>
        <div class="controls">
            <input type="text" name="it_ancho_thumb" value="<?php echo $it_ancho_thumb ?>">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" >Largo thumb:</label>
        <div class="controls">
            <input type="text" name="it_largo_thumb" value="<?php echo $it_largo_thumb ?>">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" >¿Con thumb?:</label>
        <div class="controls">
            <select name="it_con_thumb">
                <option <?php echo $this->gf->c_select('no',$it_con_thumb) ?> value="no">NO</option>
                <option <?php echo $this->gf->c_select('si',$it_con_thumb) ?> value="si">SI</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" >Descripción:</label>
        <div class="controls">
            <textarea name="it_descripcion"><?php echo $it_descripcion ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button class="btn btn-large btn-primary" type="submit" >Guardar</button>&nbsp;&nbsp;
            <a class="btn btn-large btn-info" href="<?php echo base_url() . "imagenes_tipo/lists" ?>">Volver</a>
        </div>
    </div>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
    <input type="hidden" name="accion" value="<?php echo $accion ?>">
    <input type="hidden" name="it_id_imagen_tipo" value="<?php echo $it_id_imagen_tipo ?>">
</form>