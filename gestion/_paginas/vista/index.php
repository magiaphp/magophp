<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php // include "tabs.php";      ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Páginas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_paginas&c=crear"> <?php _t("Nueva"); ?></a>

    
     <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_paginas&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=_paginas_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
     </div>    
    
    
    
    
    
    
    
    
    
</h2>
<?php echo _t("Items"); ?>: 
<?php echo _paginas_total(); ?>

<table class="table table-striped">
    
    <?php
    $ganchos = _grupos_array();
    _opciones_thead("_paginas", $ganchos);
    
    ?>
    
    
    
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_paginas", $_usuarios_grupo)) {
               include "./_paginas/vista/tr_buscar.php";
        }
        ?>


        <?php
        $i = 1;
        while ($_paginas = mysql_fetch_array($sql)) {
            include "./_paginas/reg/reg.php";
            if (permisos_tiene_permiso("editar", "_paginas", $_usuarios_grupo)) {
                include "./_paginas/vista/tr.php";
                // include "./_paginas/vista/tr_editar.php";
            } else {
                include "./_paginas/vista/tr.php";
            }
            $i++;
        }
        ?>
    </tbody>
    

    <?php
    if (permisos_tiene_permiso("crear", "_paginas", $_usuarios_grupo)) {
          include "./_paginas/vista/tr_anadir.php";
    }
    ?>
    <?php    _opciones_tfoot("_paginas", $ganchos);    ?>
</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>

