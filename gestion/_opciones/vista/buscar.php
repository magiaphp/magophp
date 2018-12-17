<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php include "tabs.php"; ?>

<h2> 

    <span class="glyphicon glyphicon-search"></span> 

    <?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
            <th><?php _t("Opcion"); ?></th> 
            <th><?php _t("Valor"); ?></th> 
            <th><?php _t("Grupo"); ?></th> 
            <th><?php _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_opciones", $_usuarios_grupo)) {
            //   include "./_opciones/vista/tr_buscar.php";
        }
        ?>


<?php
$i = 1;
while ($_opciones = mysql_fetch_array($sql)) {
    include "./_opciones/reg/reg.php";
    if (permisos_tiene_permiso("editar", "_opciones", $_usuarios_grupo)) {
        include "./_opciones/vista/tr.php";
        // include "./_opciones/vista/tr_editar.php";
    } else {
        include "./_opciones/vista/tr.php";
    }
    $i++;
}
?>
    </tbody>
        <?php
        if (permisos_tiene_permiso("crear", "_opciones", $_usuarios_grupo)) {
            //   include "./_opciones/vista/tr_anadir.php";
        }
        ?>


</table> 


