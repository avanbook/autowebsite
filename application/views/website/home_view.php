<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Cabañas HUARACO  || San Rafael Mendoza</title>
        <meta name="description" content="Cabañas Huaraco  San Rafael Mendoza -  cabañas para 6 personas totalmetne equipadas, Aire Acondicionado - Pisicna -Cocheras - Quincho - Cabañas en San Rafael - " />
        <meta name="Keywords" lang="es" content="Turismo, Cabanas,cab, cabanias, San, Rafael, ">
            <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
            <link href='http://fonts.googleapis.com/css?family=Chau+Philomene+One' rel='stylesheet' type='text/css'>
                <!-- CSS -->
                <link rel="stylesheet" href="<?php echo base_url() ?>css/website/default/default.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="<?php echo base_url() ?>css/website/light/light.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="<?php echo base_url() ?>css/website/dark/dark.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="<?php echo base_url() ?>css/website/bar/bar.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="<?php echo base_url() ?>css/website/nivo-slider.css">
                    <link rel="stylesheet" href="<?php echo base_url() ?>css/website/estilos.css">
                        <!-- JS -->
                        <script type="text/javascript" src="<?php echo base_url() ?>js/website/jquery-1.8.2.min.js"></script>
                        <script type="text/javascript" src="<?php echo base_url() ?>js/website/jquery.nivo.slider.js" ></script>
                        <script type="text/javascript">
                            $(document).ready(function(){ 
                                $('#sliders').nivoSlider({
                                    effect: 'fade',
                                    directionNav: false, // Next & Prev navigation
                                    controlNav: false, // 1,2,3... navigation
                                    controlNavThumbs: true // Use thumbnails for Control Nav

                                });
                            });
                        </script>
                        </head>
                        <body>
                            <div align="center" id="divtop">
                                <div id="general" aling="center">
                                    <!--BEGUIN:logo  -->
                                    <div id="logo"><img src="<?php echo base_url() ?>images/logo.png" alt="cabañas Huaraco"></div>
                                    <!--END : logo -->
                                    <!--BEGUIN:NAV -->
                                    <div id="nav">
                                        <div  aling="center">
                                            <ul>
                                                <li><a href="index.html" title="Ir a pagna de Inicio" >Inicio</a></li>	<li  ><a href="lugar.html" title="El Lugar - conoce el complejo" >El Lugar</a></li>					<li><a href="cabanas.html" title="Ver las Cabañas" >Las Cabañas</a></li>
                                                <li><a href="servicios.html" title="Servicios Cabañas Casas del Lago" >Servicios</a></li>
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
                                            <?php foreach ($slider_array as $var): ?>
                                                <img src="<?php echo base_url() .$var['it_gral_upload'].$var['im_id_imagen'] ?>.jpg" alt=""  />
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <!--END:Slider -->
                                    <!--BEGUIN:CONTENIDOS -->
                                    <div id="bien" align="left">
                                        <h1>BIENVENIDOS</h1></div>
                                    <div id="contenidos" align="left">
                                        <div id="welc">
                                            <p><b>Cabañas Huaraco</b> los invita a disfrutar de sus vacaciones en un entorno natural y de relajacion.</p> <p>Nuestro Complejo cuenta con con 6 cabañas de 2 habitaciones totalmente equipadas para 6 personas, con un parque verde con pileta y quincho.</p>
                                        </div>
                                        <div id="desta"><h2>Donde Estamos</h2> 
                                            <p><?php echo $data_row['dat_direccion'] ?></p>
                                            <p>San Rafael - Mendoza</p>
                                            <p>Argentina</p><br/>
                                            <span class="buttons"><a href="ubicacion.html">VER MAPA ></a></span>
                                        </div><div id="social"><h2>Reservas al	</h2><p class="telefonos" align="center">(0260) 15 4 517036 /<br/> 15 4 682657  </p> </div></div>
                                    <!--END:CONTENIDOS -->
                                    <div id="footer" align="left">
                                        <p class="infos">Cabañas Huaraco - San Rafael - Mendoza - Argentina</p>
                                        <p>Av Alverdi 5300 - Telefonos: 0260 15 4 517036 / 15 4 682657 / 15 4 582148 - Email:  info@cabanashuaraco.com </p>
                                    </div>
                                </div>
                        </body>
                        </html>