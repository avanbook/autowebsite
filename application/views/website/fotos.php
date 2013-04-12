<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Galeria de Fotos || Cabañas Casas del Lago || San Rafael Mendoza</title>
        <meta name="description" content="Las Cabañas Casas Del Lago - Rama Caida - San RAfael Mendoza - Galeria ftografica, dicen que una foto vale mas que mil palabras! .. conoscanos a traves de nuestras fotos. " />
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

                            $('#fotos a').lightBox();




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
                                <div id="home"><a href="index.html" title="Ir al home del Sitio">Ir a Home</a></div>	
                                <div id="cont_info">
                                    <div><p>Reservas al 0260 15 4418273 / 15 4698093  o Email: info@casasdellago.com</p></div>

                                </div>
                                <!--BEGUIN:logo  -->
                                <div id="logo" aling="center"><img src="images/logo.png" alt="Casas del Lago | Logo"></div>
                                <!--END : logo -->
                                <!--BEGUIN:NAV -->
                                <div id="nav">

                                    <div  aling="center">
                                        <ul>
                                            <li  ><a href="index.html" title="Ir a pagna de Inicio" >Inicio</a></li>  <li  ><a href="lugar.html" title="El Lugar - conoce el complejo" >El Lugar</a></li>         <li><a href="cabanas.html" title="Ver las Cabañas" >Las Cabañas</a></li>
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
                                        <img src="fotos/1.jpg" alt=""  />
                                        <img src="fotos/2.jpg" alt="" />
                                        <img src="fotos/3.jpg" alt="" />
                                        <img src="fotos/4.jpg" alt="" />



                                    </div>

                                </div>

                                <!--END:Slider -->

                                <!--BEGUIN:CONTENIDOS -->
                                <div id="contenidos" align="left">
                                    <div id="fotos"><h2>Galeria de Fotos</h2>
                                        <p><b>Dicen que una foto vale mas que mil palabras!</b> .. conozcanos a traves de nuestras fotos.<br/>
                                            Clickee en la imagen para ampliarla.

                                        </p>


                                        <a href="fotos/galeria/1.jpg" title="Vista Exteior Cabañas" ><img src="fotos/galeria/1.jpg" alt=""  /></a>
                                        <a href="fotos/galeria/2.jpg" title="Vista Exteior Cabañas" ><img src="fotos/galeria/2.jpg" alt="" /></a>
                                        <a href="fotos/galeria/3.jpg" title="Vista Exteior Cabañas" ><img src="fotos/galeria/3.jpg" alt="" /></a>
                                        <a href="fotos/galeria/4.jpg" title="Pileta y Camas para Sol" ><img src="fotos/galeria/4.jpg" alt="" /></a>
                                        <a href="fotos/galeria/5.jpg" title="Pileta y Vista Cabaña" ><img src="fotos/galeria/5.jpg" alt=""  /></a>
                                        <a href="fotos/galeria/6.jpg" title="Vista Parque y Quincho" ><img src="fotos/galeria/6.jpg" alt="" /></a>
                                        <a href="fotos/galeria/7.jpg" title="Dormitorio Matrimonia" ><img src="fotos/galeria/7.jpg" alt="" /></a>
                                        <a href="fotos/galeria/8.jpg" title="Dormitorio con Cuchetas y single" ><img src="fotos/galeria/8.jpg" alt="" /></a>
                                        <a href="fotos/galeria/9.jpg" title="Dormitorio Cuchetas y single" ><img src="fotos/galeria/9.jpg" alt=""  /></a>
                                        <a href="fotos/galeria/10.jpg" title="Cocina Comedor" ><img src="fotos/galeria/10.jpg" alt="" /></a>
                                        <a href="fotos/galeria/13.jpg" title="Dormitorio Matrimonial" ><img src="fotos/galeria/13.jpg" alt="" /></a>
                                        <a href="fotos/galeria/14.jpg" title="Entrada Cabaña" ><img src="fotos/galeria/14.jpg" alt="" /></a>
                                        <a href="fotos/galeria/18.jpg" title="Baño de Cabañas" ><img src="fotos/galeria/18.jpg" alt="" /></a>
                                        <a href="fotos/galeria/15.jpg" title="Cocina Comedor" ><img src="fotos/galeria/15.jpg" alt=""  /></a>

                                        <a href="fotos/galeria/17.jpg" title="Vista del Complejo" ><img src="fotos/galeria/17.jpg" alt="" /></a>
                                        <a href="fotos/galeria/12.jpg" title="Nevada en Invierno " ><img src="fotos/galeria/12.jpg" alt="" /></a>
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