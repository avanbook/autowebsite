<?php
    $query="select * from imagenes_tipo";
    $secciones = $this->db->query($query);
    $secciones = $secciones->result_array(); 
?>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">WebGeneric</a>
            <div class="nav-collapse collapse">
                <div class="btn-group pull-right">
                    <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i>admin</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-ban-circle"></i>Salir</a></li>
                    </ul>
                </div>
                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Datos<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>datos/form/">Nuevo Dato</a></li>
                            <li><a href="<?php echo base_url() ?>datos/lists/">Listar Datos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Variables<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>variables/form/">Nueva Variable</a></li>
                            <li><a href="<?php echo base_url() ?>variables/lists/">Listar Variables</a></li>
                        </ul>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>secciones/form/">Nueva Sección</a></li>
                            <li><a href="<?php echo base_url() ?>secciones/lists/">Listado Secciones</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Imagen Tipo<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>imagenes_tipo/form/">Nueva Imagen Tipo</a></li>
                            <li><a href="<?php echo base_url() ?>imagenes_tipo/lists/">Listado Imagenes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Imagenes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php foreach($secciones as $var): ?>
                            <li><a href="<?php echo base_url()."imagenes/lists/".$var['it_id_imagen_tipo'] ?>"><?php echo $var['it_nombre'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>