<!--BEGUIN:CONTENIDOS -->
<div id="bien" align="left">
    <h1><?php echo $contacto_head ?></h1>
</div>
<div id="contenidos" align="left">
    <div id="contacto">
        <?php echo $contacto_body ?>
    </div>
    <div id="form_contacto">
        <h2>Formulario contacto</h2>
        <div id="form">
            <div id="loading"><img src="images/ajax-loader.gif" alt=""></div>
            <div><label for="name">Nombre:</label><br/><input type="text" name="nombre" id="name" value="Su nombre Aqui"/> </div>
            <div><label for="apellido">Apellido:</label><br/><input type="text" name="apellido" id="apellido" value="Su apellido Aqui"/> </div>
            <div><label for="email">Email:</label><br/><input type="text" name="email" value="Su email Aqui" id="email"/> </div>
            <div><label for="telefono">Telefono:</label><br/><input type="text" name="telefono" id="telefono" value="Su telefono Aqui"/> </div>
            <div><label for="consulta">Consulta:</label><br/><textarea name="consulta" id="consulta" cols="41" rows="6" id="consulta">Agregue su consulta</textarea> </div>
            <div><button type="submit" id="enviar">Enviar</button></div>
        </div>
    </div>
</div>
<!--END:CONTENIDOS -->