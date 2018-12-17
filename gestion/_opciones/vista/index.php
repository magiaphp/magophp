<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("_opciones"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=_opciones&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>

<table class="table table-striped"><?php _opciones_thead(); ?><tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_opciones", $_usuarios_grupo)) {
            include "./_opciones/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1; // cuenta lineas
        $grupo_actual = "";
        while ($_opciones = mysql_fetch_array($sql)) {

            include "./_opciones/reg/reg.php";

            $campo_disponibles = _opciones_campos_disponibles();

            if ($grupo_actual != $_opciones_grupo) {
                echo "<tr><td colspan=\"6\">Grupo </td></tr>";
            }

            echo "<tr>";
            //  include "./_opciones/vista/tr_editar.php";
            include "./_opciones/vista/tr.php";
            echo "</tr>";
            $grupo_actual = $_opciones_grupo;
            $i++;
        }
        ?></tbody>
    <?php
    if (permisos_tiene_permiso("crear", "_opciones", $_usuarios_grupo)) {
        include "./_opciones/vista/tr_anadir.php";
    }
    ?>
    <?php _opciones_tfoot(); ?>

</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion_master($p, $c, $total_items, $pag);
?>