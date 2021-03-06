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

    <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_opciones&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=_opciones_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
    </div>


</h2>







<div class="row">

    <div class="col-lg-2">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <?php _t("Grupo"); ?>
            </a>
            <?php
            foreach (_opciones_array_de_campo("grupo") as $key => $value) {
                echo "<a href=\"index.php?p=_opciones&c=buscar_segun_grupo&_opciones_grupo=".$value."\" class=\"list-group-item\">$value</a>";
            }
            ?>

        </div>






    </div>


    <div class="col-lg-10">







        <table class="table table-striped">
            <?php
            $ganchos = array();

            _opciones_thead("_opciones", $ganchos);
            ?>

            <tbody>
                <?php
                if (permisos_tiene_permiso("ver", "_opciones", $_usuarios_grupo)) {
                    // include "./_opciones/vista/tr_buscar.php";
                }
                ?>

                <?php
                $i = 1; // cuenta lineas
                $grupo_actual = "";
                while ($_opciones = mysql_fetch_array($sql)) {

                    include "./_opciones/reg/reg.php";
                    if ($grupo_actual != $_opciones_grupo) {
                        echo "<tr><td colspan=\"6\">Grupo </td></tr>";
                    }

                    echo "<tr>";
                    include "./_opciones/vista/tr.php";
                    echo "</tr>";
                    $grupo_actual = $_opciones_grupo;
                    $i++;
                }
                ?>

            </tbody>
            <?php
            if (permisos_tiene_permiso("crear", "_opciones", $_usuarios_grupo)) {
                //include "./_opciones/vista/tr_anadir.php";
            }
            ?>
            <?php _opciones_tfoot("_opciones", $ganchos); ?>

        </table> 

        <?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
        echo paginacion_master($p, $c, $total_items, $pag);
        ?>

    </div>
</div>

