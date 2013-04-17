<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>UBICACION || Cabañas Huaraco || San Rafael Mendoza</title>
        <meta name="description" content="Las Cabañas Huaraco  San RAfael Mendoza - Ubicada en las afueras de san rafael a solo 5 kilometros del centro. Cuenta con grandes servicios para una confortable estadia en San Rafael " />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Chau+Philomene+One' rel='stylesheet' type='text/css'>
            <!-- CSS -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/website/default/default.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/website/light/light.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/website/dark/dark.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/website/bar/bar.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/website/nivo-slider.css">
                <link rel="stylesheet" href="<?php echo base_url(); ?>css/website/estilos.css">
                    <!-- JS -->
                    <script type="text/javascript" src="<?php echo base_url(); ?>js/website/jquery-1.8.2.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>js/website/jquery.nivo.slider.js" ></script>
                    <!-- LIGHTBOX-->
                    <script type="text/javascript" src="<?php echo base_url(); ?>js/website/lightbox/js/jquery.lightbox-0.5.js"></script>
                    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/website/lightbox/css/jquery.lightbox-0.5.css" media="screen" />
                    <script type="text/javascript">
                        $(document).ready(function(){ 
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
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
                    <script type="text/javascript">
                        //<![CDATA[
                        // Inicialización de variables.
                        var map      = null;
                        function initialize() {  
                            var map;  
                            var myOptions = {
                                zoom: 16,
                                center: new google.maps.LatLng(-34.644789,-68.273658),
                                mapTypeId: google.maps.MapTypeId.HYBRID,
                                mapTypeControl: true,
                                mapTypeControlOptions: {
                                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                                },
                                zoomControl: true,
                                zoomControlOptions: {
                                    style: google.maps.ZoomControlStyle.SMALL
                                },
                                scaleControl: true
                            }
                            var map = new google.maps.Map(document.getElementById("map"),
                            myOptions);
                            var image = 'http://sanrafaelhoteles.com/imagenes/hotel.png';
                            var myLatLng = new google.maps.LatLng(-34.644789,-68.273658);
                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                icon: image
                            });
                            var infowindow = new google.maps.InfoWindow({
                                content: '<p><b>Cabañas Huaraco  </b><br>Av Alberdi 5300<br/>San Rafael - Mendoza <br/>0260 15 4 517036 / 15 4 682657</p>'
                            });
                            infowindow.open(map, marker);
                        }
                    </script>
                    </head>
                    <body onload="initialize()">
                        <div align="center" id="divtop">
                            <div id="general" aling="center">
                                <!--BEGUIN:logo  -->
                                <div id="logo"><img src="<?php echo base_url() ?>images/logo.png" alt="cabañas Huaraco"></div>
                                <!--END : logo -->
                                <!--BEGUIN:NAV -->
                                <div id="nav">
                                    <div  aling="center">
                                        <ul>
                                            <li><a href="<?php echo base_url() ?>home/index.html" title="Ir a pagína de Inicio" >Inicio</a></li>	
                                            <li><a href="<?php echo base_url() ?>home/lugar.html" title="El Lugar - conoce el complejo" >El Lugar</a></li>					
                                            <li><a href="<?php echo base_url() ?>home/cabanas.html" title="Ver las Cabañas" >Las Cabañas</a></li>
                                            <li><a href="<?php echo base_url() ?>home/servicios.html" title="Servicios Cabañas Cabañas Huaraco" >Servicios</a></li>
                                            <li><a href="<?php echo base_url() ?>home/ubicacion.html" title="Ubicacion del Complejo" alt="ubicacion" >Ubicacion</a></li>
                                            <li><a href="<?php echo base_url() ?>home/fotos.html" title="Galeria fotografica de las cabañas" >Fotos</a></li>
                                            <li><a href="<?php echo base_url() ?>home/contacto.html" title="Contactenos.." >Contactenos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--END:NAV -->
                                <!--BEGUIN:MAPA -->
                                <div id="mapa"><div id="map"></div></div>
                                <!--END:Slider -->
                                <!--BEGUIN:CONTENIDOS -->
                                <div id="contenidos" align="left">
                                    <div id="servicios"><h2>Ubicacion</h2>
                                        <p>
                                            Cabañas Huaraco esta ubicado en el distrito de Rama Caida a 12 km de la ciudad de San Rafael. Zona de hermosisima belleza elegida por bodegas y emprendimientos turisticos para instalarse debido a su tranquilidad y la belleza de la naturaleza que inunda la zona.
                                            <br/><br/>
                                            <b>Direccion:</b> Av Alverdi 5300 - San Rafael - Mendoza<br/><br/>
                                            <b>Coordenadas GPS: </b> S 34 38.687 W 68 16.419
                                        </p>
                                        <br/>
                                    </div>
                                    <div id="foto_cab">
                                        <h2>Contactenos</h2>
                                        <div id="form">
                                            <div id="loading"><img src="images/ajax-loader.gif" alt=""></div>
                                            <div><label for="name">Nombre:</label><br/><input type="text" name="nombre" id="name" value="Su nombre Aqui"/> </div>
                                            <div><label for="apellido">Apellido:</label><br/><input type="text" name="apellido" id="apellido" value="Su apellido Aqui"/> </div>
                                            <div><label for="email">Email:</label><br/><input type="text" name="email" value="Su email Aqui" id="email"/> </div>
                                            <div><label for="telefono">Telefono:</label><br/><input type="text" name="telefono" id="telefono" value="Su telefono Aqui"/> </div>
                                            <div><label for="consulta">Consulta:</label><br/><textarea name="consulta" id="" cols="41" rows="6" id="consulta">Agregue su consulta</textarea> </div>
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