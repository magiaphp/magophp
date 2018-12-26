<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php // include "tabs.php";   ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de usuarios"); ?> 

    <a type="button" class="btn btn-primary navbar-btn" href="?p=_usuarios&c=crear"> 
        <?php _t("Nuevo"); ?>
    </a>
    
    
     <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
       <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_usuarios&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=_usuarios_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
    </div>
    
    
    
    
</h2>

<table class="table table-striped">
    <?php 
    $ganchos = array("Empresa", "Contacto", "Activo");
    _opciones_thead("_usuarios", $ganchos); ?>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_usuarios", $_usuarios_grupo)) {
            // include "./_usuarios/vista/tr_buscar.php";
        }
        ?>
        
        <?php
        $i = 1;
        while ($t_usuarios = mysql_fetch_array($sql)) {
            include "./_usuarios/reg/ttt.php";
            if (permisos_tiene_permiso("editar", "_usuarios", $_usuarios_grupo)) {
                include "./_usuarios/vista/tr.php";
                // include "./_usuarios/vista/tr_editar.php";
            } else {
                include "./_usuarios/vista/tr.php";
            }
            $i++;
        }
        ?>
        
    </tbody>
    <?php
    if (permisos_tiene_permiso("crear", "_usuarios", $_usuarios_grupo)) {
        //   include "./_usuarios/vista/tr_anadir.php";
    }
    ?>
    
    <?php _opciones_tfoot("_usuarios", $ganchos); ?>  

</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>
