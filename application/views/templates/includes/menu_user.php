<?php
$query = "select * from imagenes_tipo";
$rows  = $this->db->query($query);
$rows  = $rows->result_array();
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Huaraco</a>
            <div class="nav-collapse collapse">
                <div class="btn-group pull-right">
                    <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i>User</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url()."login/salir/" ?>"><i class="icon-ban-circle"></i>Salir</a></li>
                    </ul>
                </div>
                <ul class="nav">
                    <li class="dropdown">
                        <a href="<?php echo base_url() ?>user/datos_user/form/" >Modificar datos<b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo base_url() ?>user/variables_user/lists/" >Campos<b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Imagenes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php foreach ($rows as $var): ?>
                            <li><a href="<?php echo base_url()."user/imagenes_user/lists/".$var['it_id_imagen_tipo'] ?>"><?php echo $var['it_nombre'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>