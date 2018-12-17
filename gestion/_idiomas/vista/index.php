<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php //include "tabs.php";   ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _idiomas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_idiomas&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>

            <th><?php echo _t("Idioma"); ?></th> 
            <th><?php echo _t("Nombre"); ?></th> 
            <th><?php echo _t("Orden"); ?></th> 
            <th><?php echo _t("Traducido"); ?></th> 
            <th><?php echo _t("% Traducción"); ?></th> 
            <th><?php echo _t("Activo"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_idiomas", $_usuarios_grupo)) {
            include "./_idiomas/vista/tr_buscar.php";
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
        include "./_idiomas/vista/tr_anadir.php";
    }
    ?>
    <tr> 
        <th>#</th>

        <th><?php echo _t("Idioma"); ?></th> 
        <th><?php echo _t("Nombre"); ?></th> 
        <th><?php echo _t("Orden"); ?></th> 
        <th><?php echo _t("Traducido"); ?></th> 
        <th><?php echo _t("% Traducción"); ?></th> 
        <th><?php echo _t("Activo"); ?></th> 
        <th><?php echo _t("Accion"); ?></th> 
    </tr>

</table> 



<a href="pdf.php?p=_idiomas&c=pdf">PDF</a>




<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>