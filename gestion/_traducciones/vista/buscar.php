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
            <th><?php _t("Frase"); ?></th> 
            <th><?php _t("Idioma"); ?></th> 
            <th><?php _t("Traduccion"); ?></th> 
            <th><?php _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_traducciones", $_usuarios_grupo)) {
            //   include "./_traducciones/vista/tr_buscar.php";
        }
        ?>


<?php
$i = 1;
while ($_traducciones = mysql_fetch_array($sql)) {
    include "./_traducciones/reg/reg.php";
    if (permisos_tiene_permiso("editar", "_traducciones", $_usuarios_grupo)) {
        include "./_traducciones/vista/tr.php";
        // include "./_traducciones/vista/tr_editar.php";
    } else {
        include "./_traducciones/vista/tr.php";
    }
    $i++;
}
?>
    </tbody>
        <?php
        if (permisos_tiene_permiso("crear", "_traducciones", $_usuarios_grupo)) {
            //   include "./_traducciones/vista/tr_anadir.php";
        }
        ?>


</table> 


<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>


