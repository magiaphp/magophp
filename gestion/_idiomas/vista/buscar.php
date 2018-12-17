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
            <th><?php _t("Idioma"); ?></th> 
            <th><?php _t("Nombre"); ?></th> 
            <th><?php _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_idiomas", $_usuarios_grupo)) {
            //   include "./_idiomas/vista/tr_buscar.php";
        }
        ?>


<?php
$i = 1;
while ($_idiomas = mysql_fetch_array($sql)) {
    include "./_idiomas/reg/reg.php";
    if (permisos_tiene_permiso("editar", "_idiomas", $_usuarios_grupo)) {
        include "./_idiomas/vista/tr.php";
        // include "./_idiomas/vista/tr_editar.php";
    } else {
        include "./_idiomas/vista/tr.php";
    }
    $i++;
}
?>
    </tbody>
        <?php
        if (permisos_tiene_permiso("crear", "_idiomas", $_usuarios_grupo)) {
            //   include "./_idiomas/vista/tr_anadir.php";
        }
        ?>


</table> 


