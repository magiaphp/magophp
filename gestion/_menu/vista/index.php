<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php // include "tabs.php";  ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _menu"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_menu&c=crear"> <?php _t("Nueva"); ?></a>



    <div class="dropdown nav navbar navbar-right">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php _t("Acciones"); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="pdf.php?p=_menu&c=pdf"><?php _t("PDF"); ?></a></li>
            <li><a href="index.php?p=_opciones&c=buscar&_opciones_opcion=_menu_thead&_opciones_valor=&_opciones_grupo=">Config</a></li>
        </ul>
    </div>

</h2>

<div class="row">
    <div class="col-lg-3"><hr>

        Menu izquierdo

    </div>
    <div class="col-lg-9">

        <table class="table table-striped">
            <thead>
                <tr> 
                    <th>#</th>

                    <th><?php echo _t("Ubicacion"); ?></th> 
                    <th><?php echo _t("Padre"); ?></th> 
                    <th><?php echo _t("Label"); ?></th> 
                    <th><?php echo _t("Url"); ?></th> 
                    <th><?php echo _t("Icono"); ?></th> 
                    <th><?php echo _t("Orden"); ?></th> 
                    <th><?php echo _t("Accion"); ?></th> 
                </tr>
            </thead>
            <tbody>

                <?php
                if (permisos_tiene_permiso("ver", "_menu", $_usuarios_grupo)) {
                    include "./_menu/vista/tr_buscar.php";
                }
                ?>


                <?php
                $i = 1;
                while ($_menu = mysql_fetch_array($sql)) {
                    include "./_menu/reg/reg.php";
                    if (permisos_tiene_permiso("editar", "_menu", $_usuarios_grupo)) {
                        include "./_menu/vista/tr.php";
                        // include "./_menu/vista/tr_editar.php";
                    } else {
                        include "./_menu/vista/tr.php";
                    }
                    $i++;
                }
                ?>
            </tbody>
            <?php
            if (permisos_tiene_permiso("crear", "_menu", $_usuarios_grupo)) {
                include "./_menu/vista/tr_anadir.php";
            }
            ?>


        </table> 

        <?php
        echo paginacion_master($p, $c, $total_items, $pag);
        ?>
    </div>
</div>
