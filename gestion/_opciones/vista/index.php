<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("_opciones"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=_opciones&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>






    
    <div class="row">
        
        <div class="col-lg-2">
            
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Cras justo odio
                </a>
                
                
                <a href="index.php?p=_opciones&c=buscar_segun_grupo&_opciones_grupo=10" class="list-group-item">10</a>
                <a href="index.php?p=_opciones&c=buscar_segun_grupo&_opciones_grupo=20" class="list-group-item">20 Email</a>
                <a href="index.php?p=_opciones&c=buscar_segun_grupo&_opciones_grupo=1000" class="list-group-item">1000</a>
                <a href="index.php?p=_opciones&c=buscar_segun_grupo&_opciones_grupo=9000" class="list-group-item">9000</a>
                <a href="index.php?p=_opciones&c=buscar_segun_grupo&_opciones_grupo=2000" class="list-group-item">2000 Monedas</a>
                
                
   
            </div>


        </div>
        
        
        <div class="col-lg-10">

            
            

            
            
            
            <table class="table table-striped">
                <?php 
                
                $ganchos = array();
                
                _opciones_thead("_opciones", $ganchos); ?>
                
                <tbody>
                    <?php
                    if (permisos_tiene_permiso("ver", "_opciones", $_usuarios_grupo)) {
                       // include "./_opciones/vista/tr_buscar.php";
                    }
                    ?>
                        
                    <?php
                    $i = 1; // cuenta lineas
                    $grupo_actual = "";
                    while ($_opciones = mysql_fetch_array($sql)) {

                        include "./_opciones/reg/reg.php";
                        if ($grupo_actual != $_opciones_grupo) {
                            echo "<tr><td colspan=\"6\">Grupo </td></tr>";
                        }

                        echo "<tr>";                        
                        include "./_opciones/vista/tr.php";
                        echo "</tr>";
                        $grupo_actual = $_opciones_grupo;
                        $i++;
                    }
                    ?>
                
                </tbody>
                <?php
                if (permisos_tiene_permiso("crear", "_opciones", $_usuarios_grupo)) {
                    //include "./_opciones/vista/tr_anadir.php";
                }
                ?>
                <?php _opciones_tfoot("_opciones", $ganchos); ?>

            </table> 

            <?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
            echo paginacion_master($p, $c, $total_items, $pag);
            ?>

        </div>
    </div>

