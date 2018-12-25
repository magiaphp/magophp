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
    /*<button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#myModal">
        <?php _t("Nuevo"); ?>
    </button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php _t("Nuevo grupo"); ?></h4>
            </div>
            <div class="modal-body">
                <?php
                
                echo __DIR__; 
                echo "<hr>"; 
                include "./vista/_grupos/form_crear.php";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>*/
    ?>



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
    <?php 
    $ganchos = array(); 
    _opciones_thead("_permisos", $ganchos); ?>
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

        <?php _opciones_tfoot("_permisos", $ganchos); ?>
</table> 
<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>