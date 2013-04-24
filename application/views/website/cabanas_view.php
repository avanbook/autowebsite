<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LAS CABAÑAS || Cabañas HUARACO  || San Rafael Mendoza</title>
        <meta name="description" content="Cabañas Huaraco  San RAfael Mendoza -  Las cabañas estan preparadas para 6 personas totalmetne equipadas, Aire Acondicionado - Pisicna -Cocheras - Quincho - Cabañas en San Rafael - Reserve YA!! " />
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
                            $('#sliders').nivoSlider({
                                effect: 'fade',
                                directionNav: false, // Next & Prev navigation
                                controlNav: false, // 1,2,3... navigation
                                controlNavThumbs: true // Use thumbnails for Control Nav

                            });

                            $('#foto_cab a').lightBox();


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
                                            <?php foreach ($secciones_array as $var): ?>
                                                <li><a href="<?php echo base_url() . $var['sec_url'] ?>.html" title="<?php echo $var['sec_descripcion'] ?>" ><?php echo $var['sec_nombre'] ?></a></li>	
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <!--END:NAV -->
                                <!--BEGUIN:SLIDER -->
                                <div class="theme-default">
                                    <div id="sliders" class="nivoSlider">
                                        <?php foreach ($slider_array as $var): ?>
                                            <img src="<?php echo base_url() . $var['it_gral_upload'] . $var['im_id_imagen'] ?>.jpg" alt="<?php echo $var['im_descripcion'] ?>"  />
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <!--END:Slider -->
                                <!--BEGUIN:CONTENIDOS -->
                                <div id="bien" align="left">
                                    <h1><?php echo $cabanas_head ?></h1></div>
                                <div id="contenidos" align="left">
                                    <div id="cabanas">
                                        <?php echo $cabanas_body ?>
                                    </div>
                                    <div id="foto_cab">
                                        <h2>Fotos de las Cabañas</h2>
                                        <p>Presione en imagen para agrandar.</p>
                                        <?php foreach ($gral_array as $var): ?>
                                            <a href="<?php echo base_url() . $var['it_gral_upload'] . $var['im_id_imagen'] ?>.jpg" title="" ><img src="<?php echo base_url() . $var['it_gral_upload'] . $var['im_id_imagen'] ?>.jpg" alt="<?php echo $var['im_descripcion'] ?>"  /></a>
                                        <?php endforeach; ?>
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