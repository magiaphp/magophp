


<?php //include "tabs.php";    ?>


<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _grupos"); ?> 


    <button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#myModal">
        <?php _t("Nuevo"); ?>
    </button>


    <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Exportar"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_grupos&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=editar&_opciones_id=60">Config</a></li>
        </ul>
    </div>


</h2>









<table class="table table-striped">
    <thead>
        <tr> 
            <?php
            $ganchos = array("Total usuarios");
            _opciones_thead("_grupos", $ganchos);
            ?>         
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_grupos", $_usuarios_grupo)) {
            include "./_grupos/vista/tr_buscar.php";
        }
        ?>


        <?php
        $i = 1;
        while ($_grupos = mysql_fetch_array($sql)) {

            include "./_grupos/reg/reg.php";
            // $campo_disponibles = _opciones_campos_disponibles_segun_tabla("_opciones");


            if (permisos_tiene_permiso("editar", "_grupos", $_usuarios_grupo)) {
                include "./_grupos/vista/tr.php";
            } else {
                include "./_grupos/vista/tr.php";
            }
            $i++;
        }
        ?>
    </tbody>

    <tfoot>
        <tr> 
            <?php _opciones_tfoot("_grupos", $ganchos); ?>             
        </tr>
    </tfoot>


    <?php
    if (permisos_tiene_permiso("crear", "_grupos", $_usuarios_grupo)) {
        // include "./_grupos/vista/tr_anadir.php";
    }
    ?>
</table> 





<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php _t("Nuevo grupo"); ?></h4>
            </div>
            <div class="modal-body">
                <?php
                include "form_crear.php";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>