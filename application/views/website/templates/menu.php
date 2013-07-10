                            <div align="center" id="divtop">
                                <div id="general" aling="center">
                                    <!--BEGUIN:logo  -->
                                    <div id="logo"><img src="<?php echo base_url() ?>images/logo.png" alt="cabañas Huaraco"></div>
                                    <!--END : logo -->
                                    <!--BEGUIN:NAV -->
                                    <div id="nav">
                                        <div  aling="center">
                                            <ul>
                                                <?php foreach($secciones_array as $var): ?>
                                                <li><a href="<?php echo base_url().$var['sec_url'] ?>.html" title="<?php echo $var['sec_descripcion'] ?>" ><?php echo ucwords($var['sec_nombre']) ?></a></li>	
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--END:NAV -->
                                    <!--BEGUIN:SLIDER -->
                                    <div class="theme-default">
                                        <div id="sliders" class="nivoSlider">
                                            <?php foreach ($slider_array as $var): ?>
                                                <img src="<?php echo base_url() .$var['it_gral_upload'].$var['im_id_imagen'] ?>.jpg" alt="<?php echo  $var['im_descripcion'] ?>"  />
                                            <?php endforeach; ?>
                                        </div>
                                    </div>