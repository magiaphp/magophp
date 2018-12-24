<?php //include "tabs.php";    ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _grupos"); ?> 

<?php 
/*    <a type="button" class="btn btn-primary navbar-btn" href="?p=_grupos&c=crear"> 
        <?php _t("Nuevo"); ?>
    </a>*/
?>

    <button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#myModal">
        <?php _t("Nuevo"); ?>
    </button>

</h2>


<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <?php _t("Exportar"); ?>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="pdf.php?p=_grupos&c=pdf"><?php _t("PDF"); ?></a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>



<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>

            <th><?php echo _t("Grupo"); ?></th> 
            <th><?php echo _t("Usuarios"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
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
            if (permisos_tiene_permiso("editar", "_grupos", $_usuarios_grupo)) {
                include "./_grupos/vista/tr.php";
                // include "./_grupos/vista/tr_editar.php";
            } else {
                include "./_grupos/vista/tr.php";
            }
            $i++;
        }
        ?>
    </tbody>
    
    <tfoot>
        <tr> 
            <th>#</th>

            <th><?php echo _t("Grupo"); ?></th> 
            <th><?php echo _t("Usuarios"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
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