
<h1> 
    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Sus Autos"); ?> 
</h1> 


<table class="table table-striped">
    <thead>
        <tr> 
            <td><?php _t("Total Autos"); ?></td>
            
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
            <td><?php _t("Total Autos"); ?></td>
            <?php contactos_tabla_index_titulo($orden); ?>
        </tr>
    </tfoot>

</table> 

