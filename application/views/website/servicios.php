<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Servicios || Cabañas Huaraco || San Rafael Mendoza</title>
        <meta name="description" content="Las Cabañas Huaraco San RAfael Mendoza -  Cuenta con grandes servicios para una confortable estadia en San Rafael " />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Chau+Philomene+One' rel='stylesheet' type='text/css'>

            <!-- CSS -->
            <link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="css/light/light.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="css/dark/dark.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="css/bar/bar.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="css/nivo-slider.css">
                <link rel="stylesheet" href="css/estilos.css">

                    <!-- JS -->
                    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
                    <script type="text/javascript" src="js/jquery.nivo.slider.js" ></script>

                    <!-- LIGHTBOX-->
                    <script type="text/javascript" src="lightbox/js/jquery.lightbox-0.5.js"></script>
                    <link rel="stylesheet" type="text/css" href="lightbox/css/jquery.lightbox-0.5.css" media="screen" />

                    <script type="text/javascript">
	

                        $(document).ready(function(){ 
                            $('#sliders').nivoSlider({
                                effect: 'boxRainGrow',
                                directionNav: false, // Next & Prev navigation
                                controlNav: false, // 1,2,3... navigation
                                controlNavThumbs: true, // Use thumbnails for Control Nav

                            });

                            $('#foto_cab a').lightBox();




                            // ENVIO FORMULARIO -------------------------------------
                            $('#form div#loading').hide();
                            $("#enviar").click(function() {
                                // validate and process form
                                // first hide any error messages
                                $('#form div#loading').ajaxStart(function() {
                                    $('this').show();
                                }).ajaxStop(function() {
                                    $('this').hide();
   
                                });     
                                var name = $("input#name").val();
                                if (name == "") {
                                    $("input#name").addClass("error");
                                    $("input#name").val("Falta su Nombre");
                                    $("input#name").focus();
                                    return false;
                                }
   
                                var apellido = $("input#apellido").val();
                                if (apellido == "") {
                                    $("input#apellido").addClass("error");
                                    $("input#apellido").val("Falta su Nombre");
                                    $("input#apellido").focus();
                                    return false

                                }

                                var phone = $("input#telefono").val();
                                if (phone == "") {
                                    $("input#telefono").addClass("error");
                                    $("input#telefono").val("Falta su Telefono");
                                    $("input#telefono").focus();
                                    return false; }
     
                                var email = $("input#email").val();
                                if (email == "") {
                                    $("input#email").addClass("error");
                                    $("input#email").val("Falta su Email");
                                    $("input#email").focus();
                                    return false;
                                }
      
   
                                var txt = $("textarea#consulta").val();
                                if (txt == "") {
                                    $("textarea#consulta").addClass("error");
                                    $("textarea#consulta").focus();
                                    return false;
                                }
     
                                var dataString = 'name='+ name + 'apellido='+apellido+ '&email=' + email + '&telefono=' + phone+'&consulta='+txt;
                                //alert (dataString);return false;
      
                                $.ajax({
                                    type: "POST",
                                    url: "enviar-consulta.php",
                                    data: dataString,
                                    success: function() {
                                        //       $('#form').hide();
                                        $('#foto_cab div#form').before('<div id="enviado"><p><b>Su Consulta fue enviada con Exito!!</b></p><p>Gracias por contactarnos. En breve nos comunicaremos con Ud.</p><span class="close" title="Cerrar Panel">x<span></div>');
      
          
                                    }
                                });
                                $('#foto_cab span.close').live('click', function(){

                                    $('#enviado').hide('slow');

                                });
                            });

                        });
                    </script>
                    </head>
                    <body>
                        <div align="center" id="divtop">
                            <div id="general" aling="center">
                                <!--BEGUIN:logo  -->
                                <div id="logo"><img src="images/logo.png" alt="cabañas Huaraco"></div>
                                <!--END : logo -->
                                <!--BEGUIN:NAV -->
                                <div id="nav">

                                    <div  aling="center">
                                        <ul>
                                            <li  ><a href="index.html" title="Ir a pagna de Inicio" >Inicio</a></li>	<li  ><a href="lugar.html" title="El Lugar - conoce el complejo" >El Lugar</a></li>					<li><a href="cabanas.html" title="Ver las Cabañas" >Las Cabañas</a></li>
                                            <li><a href="servicios.html" title="Servicios Cabañas Cabañas Huaraco" >Servicios</a></li>
                                            <li><a href="ubicacion.html" title="Ubicacion del Complejo" alt="ubicacion" >Ubicacion</a></li>
                                            <li><a href="fotos.html" title="Galeria fotografica de las cabañas" >Fotos</a></li>
                                            <li><a href="contacto.html" title="Contactenos.." >Contactenos</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <!--END:NAV -->




                                <!--BEGUIN:SLIDER -->

                                <div class="theme-default">

                                    <div id="sliders" class="nivoSlider">
                                        <img src="fotos/3.jpg" alt=""  />
                                        <img src="fotos/2.jpg" alt="" />
                                        <img src="fotos/6.jpg" alt="" />
                                        <img src="fotos/8.jpg" alt="" />



                                    </div>

                                </div>

                                <!--END:Slider -->

                                <!--BEGUIN:CONTENIDOS -->
                                <div id="bien" align="left">
                                    <h1>EL Lugar</h1></div>
                                <div id="contenidos" align="left">

                                    <div id="servicios">
                                        <p>
                                            Casas del Lago le brinda excelentes servicios para que su estadia en nuestro complejo sea muy confortable y disfrute sus vacaciones a pleno.

                                        </p>
                                        <br/>
                                        <p class="title">Piscina</p>

                                        <p class="title">Quincho </p>

                                        <p class="title">Parque c/ Cancha de Volley </p>
                                        <p class="title">Heladera</p>
                                        <p class="title">Cocheras Techadas </p>
                                        <p class="title">TV c/ DirecTV </p>
                                        <p class="title">Aire Acondicionado</p>
                                        <p class="title">Cocinas con Horno</p>
                                        <p class="title">Cabañas c/ Terraza</p>
                                        <p class="title">Ropa Cama</p>

                                    </div>
                                    <div id="foto_cab">
                                        <h2>Contactenos</h2>
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
                                <div id="footer" align="center">
                                    <p class="infos">Cabañas Huaraco - San Rafael - Mendoza - Argentina</p>
                                    <p>Av Alverdi 5300 - Telefonos: 0260 15 4 517036 / 15 4 682657 / 15 4 582148 - Email:  info@cabanashuaraco.com </p>

                                </div>

                            </div>
                    </body>
                    </html>