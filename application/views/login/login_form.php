<div class="container-fluid">
    <!---------------------------CONTENIDO----------------------------------------->
    <div class="page-header">
            <h1>Ingreso AutoWebSite</h1>
    </div>
    <hr>
    <br>
    <?php if(validation_errors()): ?>
    <div class="alert alert-error">
    <?php echo validation_errors(); ?>
    </div>
    <?php endif ?>
    <br>
    <div class="row-fluid">
        <div class="span4 offset3">
            <form class="form-horizontal" method="post" action="<?php echo  base_url()."login/verificar" ?>">
            <div class="control-group">
                <label class="control-label" >Usuario</label>
                <div class="controls">
                    <input type="text"  value="<?php echo set_value('usu_nick'); ?>" id="u_nick" name="usu_nick" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" >Clave</label>
                <div class="controls">
                    <input type="password" value="" name="usu_clave" id="u_clave" >
                </div>
            </div>
            <div class="offset8 span4">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
        </form>
        </div>
        

    </div>
    <!--------------------------------INPUT HIDDEN--------------------------------->
    <input type="hidden" value="<?php echo base_url() ?>" id="base_url">