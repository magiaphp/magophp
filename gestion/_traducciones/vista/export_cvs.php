<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php //include "tabs.php";   ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _traducciones"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_traducciones&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

Exportar <a href="index.php?p=_traducciones&c=export_sql">sql</a> 



<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>

            <th><?php echo _t("Frase"); ?></th> 
            <th><?php echo _t("Idioma"); ?></th> 
            <th><?php echo _t("Traduccion"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>



        

        <?php
        echo "INSERT INTO `_traducciones` (`id`, `frase`, `idioma`, `traduccion`) VALUES \n"; 
        $i = 1;
        while ($_traducciones = mysql_fetch_array($sql)) {
            include "./_traducciones/reg/reg.php";
            
           // echo "(null, '$_traducciones_frase', 'fr_BE', '<font color=\"red\">$_traducciones_traduccion</font>'),<br>";
            echo "(null, '$_traducciones_frase', 'fr_BE', '<font color=\"red\">$_traducciones_traduccion</font>'),<br>";
            $i++;
        }
        echo ";"; 
        ?>

        
</tbody>


</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion_master($p, $c, $total_items, isset($_REQUEST['pag']));
?>
    



