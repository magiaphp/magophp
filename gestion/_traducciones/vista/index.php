<?php include "tabs.php";   ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _traducciones"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_traducciones&c=crear"> <?php _t("Nueva"); ?></a>


     <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_traducciones&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=_traducciones_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
     </div>  

</h2>

<p>
Exportar <a href="index.php?p=_traducciones&c=export_sql">sql</a> 
Exportar <a href="index.php?p=_traducciones&c=export_cvs">cvs</a> 
Exportar <a href="index.php?p=_traducciones&c=export_google">google</a> 

</p>


<table class="table table-striped">
    <?php _opciones_thead("_traducciones"); ?>
    <tbody>

        <tr>
            <?php 
            include "./_traducciones/vista/tr_buscar.php";
            ?>
        </tr>
        <?php
        $i = 1;
        while ($_traducciones = mysql_fetch_array($sql)) {
            include "./_traducciones/reg/reg.php";
            include "./_traducciones/vista/tr_editar.php";
            
            $i++;
        }
        ?>
         <tr>
            <?php 
            include "./_traducciones/vista/tr_anadir.php";
            ?>
        </tr>
    </tbody>
    <?php _opciones_tfoot("_traducciones"); ?>
</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>


