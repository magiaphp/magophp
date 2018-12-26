<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php //include "tabs.php";    ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _idiomas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_idiomas&c=crear"> <?php _t("Nueva"); ?></a>
    <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_idiomas&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=_idiomas_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
    </div>
</h2>




<table class="table table-striped">
    <?php
    $gancho = array("Traducido", "% traduccion");
    _opciones_thead("_idiomas", $gancho);
    ?>

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
    <?php
    _opciones_tfoot("_idiomas", $gancho);
    ?>

</table> 



<a href="pdf.php?p=_idiomas&c=pdf">PDF</a>




<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>