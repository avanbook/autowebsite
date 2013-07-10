<!--BEGUIN:CONTENIDOS -->
<div id="bien" align="left">
    <h1><?php echo $cabanas_head ?></h1></div>
<div id="contenidos" align="left">
    <div id="cabanas">
        <?php echo $cabanas_body ?>
    </div>
    <div id="foto_cab">
        <h2>Fotos de las Cabañas</h2> 
        <p>Presione en <strong>imagen</strong> para agrandar.</p>
        <?php foreach ($gral_array as $var): ?>
            <a href="<?php echo base_url() . $var['it_gral_upload'] . $var['im_id_imagen'] ?>.jpg" title="" ><img src="<?php echo base_url() . $var['it_gral_upload'] . $var['im_id_imagen'] ?>.jpg" alt="<?php echo $var['im_descripcion'] ?>"  /></a>
        <?php endforeach; ?>
    </div>
</div>
<!--END:CONTENIDOS -->