<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php  include "tabs.php";  ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _permisos"); ?> 
    <?php /**
    <a type="button" class="btn btn-primary navbar-btn" href="?p=_permisos&c=crear"> 
        <?php _t("Nueva"); ?>           
    </a>
     * 
     */ ?>
</h2>



<?php 
mensaje("atencion","Si no esta seguro, no modifique nada porfavor"); 
?>


<form action="index.php" method="get">
    <input type="hidden" name="p" value="_permisos">
    <input type="hidden" name="c" value="buscar">
    <input type="hidden" name="donde" value="grupo">
    <select name="busqueda">
        <?php _grupos_add($busqueda); ?>
    </select>
    <input class="btn btn-default" type="submit" value="<?php _t("Cambiar de grupo"); ?>">
</form>




<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>

            <th><?php echo _t("Grupo"); ?></th> 
            <th><?php echo _t("Pagina"); ?></th> 
            <th><?php echo _t("Permiso"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_permisos", $_usuarios_grupo)) {
            //   include "./_permisos/vista/tr_buscar.php";
        }
        ?>


<?php
$i = 1;


while ($_permisos = mysql_fetch_array($sql)) {
            

    include "./_permisos/reg/reg.php";
    include "./_permisos/vista/tr.php";
    
    $i++;
}
?>
    </tbody>
        <?php
        if (permisos_tiene_permiso("crear", "_permisos", $_usuarios_grupo)) {
               include "./_permisos/vista/tr_anadir.php";
        }
        ?>

        <tr> 
            <th>#</th>

            <th><?php echo _t("Grupo"); ?></th> 
            <th><?php echo _t("Pagina"); ?></th> 
            <th><?php echo _t("Permiso"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
</table> 
<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>