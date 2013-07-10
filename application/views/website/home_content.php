<!--BEGUIN:CONTENIDOS -->
<div id="bien" align="left">
    <h1><?php echo $home_head ?></h1></div>
<div id="contenidos" align="left">
    <div id="welc">
        <?php echo $datos_row['dat_descripcion'] ?>
    </div>
    <div id="desta"><h2>Donde Estamos</h2> 
        <p><?php echo $datos_row['dat_direccion'] ?></p>
        <p><?php echo $datos_row['dat_localidad'] ?></p>
        <br>
        <span class="buttons"><a href="ubicacion.html">VER MAPA ></a></span>
    </div><div id="social"><h2>Reservas al	</h2><p class="telefonos" align="center"><?php echo $datos_row['dat_telefono'] ?></div></div>
<!--END:CONTENIDOS -->