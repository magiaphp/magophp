<h3> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Contactos"); ?> 

    <?php
    if (permisos_tiene_permiso('crear', $p, $_usuarios_grupo)) {
        echo '<a type="button" class="btn btn-primary navbar-btn btn-xs" href="?p=contactos&c=crear">' . _tr("Nuevo") . '</a> ';
    }
    ?>    
</h3>


<form class="navbar-form navbar-left">
    <?php
    if (contactos_total_segun_estatus(-1)) {
        echo '<a href="index.php?p=contactos&c=borrados">' . _tr('Borrados') . ' ' . contactos_total_segun_estatus(-1) . '</a>';
    }


    if (permisos_tiene_permiso("ver", "_grupos", $_usuarios_grupo)) {
        $g = _grupos_array_grupos();

        $i = 0;
        while ($i < count(_grupos_array_grupos())) {
            echo ucfirst(_tr($g[$i]));
            echo "(" . _usuarios_total_segun_grupo($g[$i]) . ")  ";
            $i++;
        } 
    }
    ?>

</form>




<form class="navbar-form navbar-right" method="get" action="index.php">
    <input type="hidden" name="p" value="contactos">
    <input type="hidden" name="c" value="buscar">
    <input type="hidden" name="a" value="buscar">

    <div class="form-group">
        <input type="text" class="form-control" name="b" placeholder="<?php _t("Buscar"); ?>" >
    </div>
    <button type="submit" class="btn btn-default"><?php _t("Buscar un contacto"); ?></button>
</form>



<?php /*
  <form class="form-inline">

  <div class="form-group">
  <select class="form-control">
  <option><?php _t("Cambiar el grupo por:"); ?></option>
  <?php _grupos_add(); ?>
  </select>
  </div>
  <button type="submit" class="btn btn-default "><?php _t("Cambiar"); ?></button>
  </form>
 */ ?>



<table class="table table-striped">
    <thead>
        <tr> 
            <?php contactos_tabla_index_titulo($orden); ?>

        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        while ($contactos = mysql_fetch_array($sql)) {
            include "./contactos/reg/reg.php";

            // solo el root puede ver al root
            if (_usuarios_campo_segun_email("grupo", $contactos['email']) != 'root' || $_usuarios_grupo == 'root') {
                include "./contactos/vista/tr.php";
            }
            $i++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr> 
            <?php contactos_tabla_index_titulo($orden); ?>
        </tr>
    </tfoot>

</table> 



<form class="navbar-form navbar-left">
    <?php
    if (contactos_total_segun_estatus(-1)) {
        echo '<a href="index.php?p=contactos&c=borrados">' . _tr('Borrados') . ' ' . contactos_total_segun_estatus(-1) . '</a>';
    }


    $g = _grupos_array_grupos();

    $i = 0;
    while ($i < count(_grupos_array_grupos())) {
        // echo ucfirst(_tr($g[$i]));
        // echo "(" . _usuarios_total_segun_grupo($g[$i]) . ")  ";
        $i++;
    }
    ?>

</form>





<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>
























