<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("logs"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=logs&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
    
     <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=logs&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=logs_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
    </div>
    
    
</h2>

<table class="table table-striped">
    <?php _opciones_thead("logs"); ?>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "logs", $_usuarios_grupo)) {
            include "./logs/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1; // cuenta lineas
        while ($logs = mysql_fetch_array($sql)) {

            include "./logs/reg/reg.php";

            $campo_disponibles = logs_campos_disponibles();

            echo "<tr>";
            include "./logs/vista/tr.php";
            echo "</tr>";

            $i++;
        }
        ?></tbody>
        <?php
        if (permisos_tiene_permiso("crear", "logs", $_usuarios_grupo)) {
            //include "./logs/vista/tr_anadir.php";
        }
        ?>
    <?php logs_tfoot(); ?>

</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion_master($p, $c, $total_items, $pag);
?>