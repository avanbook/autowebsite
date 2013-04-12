<div class="span12">
    <h2><?php echo $title ?> </h2>
    <div class="row-fluid">
        <div class="span9">
            <div class="row-fluid">
                <h3>Agregar Imagen</h3>
                <br>
            </div>
            <div class="row-fluid">
                <div class="row-fluid">
                    <h4>Agregar mas fotos</h4>
                </div>
                <div class="span5">
                    <form action="<?php echo base_url() ?>imagenes/save/" method="post" enctype="multipart/form-data">
                        <input type="file" name="filesToUpload[]" id="filesToUpload" multiple="" value="Agregar Foto">
                        <input type="submit" value="subir" class="btn btn-primary"/>
                        <input name="im_tipo" value="<?php echo $im_tipo ?>" type="hidden" />
                        <input name="tipo" value="foto_mas" type="hidden">
                    </form>
                </div>
                <table class="table">
                    <tr><th>Nombre Foto</th><th>Imagen</th><th>Agregar</th><th>Borrar</th></tr>
                    <?php foreach ($datos_array as $var): ?>
                        <tr id="<?php echo "ah_" . $var['im_id_imagen'] ?>">
                            <td><?php echo $var['im_id_imagen'] . "jpg" ?></td>
                            <?php if ($im_tipo == 'general'): ?>
                                <td><a rel="example_group" href="<?php echo base_url() . $this->config->item('img_gral_thumb_show') . $var['im_id_imagen'] . ".jpg" ?>"><img class="last"  width="50px" src="<?php echo base_url() . $this->config->item('img_gral_show') . $var['im_id_imagen'] . ".jpg" ?>"></a></td>
                            <?php elseif ($im_tipo == 'slider'): ?>
                                <td><a rel="example_group" href="<?php echo base_url() . $this->config->item('img_slider_thumb_show') . $var['im_id_imagen'] . ".jpg" ?>"><img class="last"  width="50px" src="<?php echo base_url() .  $this->config->item('img_slider_show')  . $var['im_id_imagen'] . ".jpg" ?>"></a></td>
                            <?php endif ?>

                            <td>
                                <form action="<?php echo base_url() ?>admin/imagenes/save/" method="post" enctype="multipart/form-data">
                                    <input type="file" name="filesToUpload[]" id="filesToUpload" multiple="" value="Agregar Foto">
                                    <input type="submit" value="subir" class="btn btn-primary"/>
                                    <input name="im_id_imagen" value="<?php echo $var['im_id_imagen'] ?>" type="hidden">
                                    <input name="im_tipo" value="<?php echo $var['im_tipo'] ?>" type="hidden">
                                    <input name="tipo" value="foto_comun" type="hidden">
                                </form>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $var['im_descripcion'] ?>" />
                            </td>
                            <td>
                                <a href= "<?php echo base_url() . "imagenes/delete/" . $var['im_id_imagen'] . "/?im_tipo=" . $var['im_tipo'] ?>" ><i class="icon-remove"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>