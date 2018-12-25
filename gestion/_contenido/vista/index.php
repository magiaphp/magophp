<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php //include "tabs.php";     ?>
<?php include "nav.php";     ?>


<?php 
/*
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _contenido"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_contenido&c=crear"> <?php _t("Nueva"); ?></a>
    <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_opciones&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=_contenido_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
    </div>
</h2>

<a href="?p=_contenido"><?php _t('Index'); ?></a> | 
<a href="?p=_contenido&c=correccion"><?php _t('Correcciones'); ?></a> | 
<a href="?p=_contenido&c=atraducir"><?php _t('No traducidas'); ?></a>
<?php
include "form_buscar.php";
?>*/
?>



<table class="table table-striped">
    <?php
    $ganchos = array();
    _opciones_thead("_contenido", $ganchos);
    ?>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_contenido", $_usuarios_grupo)) {
            //   include "./_contenido/vista/tr_buscar.php";
        }
        ?>


        <?php
        $i = 1;
        while ($_contenido = mysql_fetch_array($sql)) {
            include "./_contenido/reg/reg.php";
            $campo_disponibles = _opciones_campos_disponibles_segun_tabla("_opciones");

            include "./_contenido/vista/tr.php";



            $i++;
        }
        ?>
    </tbody>
    <?php
    if (permisos_tiene_permiso("crear", "_contenido", $_usuarios_grupo)) {
        //   include "./_contenido/vista/tr_anadir.php";
    }
    ?>
<?php _opciones_tfoot("_contenido", $ganchos); ?>


</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>