<?php
/**
 * Crea los botones de la paginacion
 * @global type $conexion
 * @global type $cfg_limite_items_en_tablas limite de items por pagina
 * @param type $p Plugin
 * @param type $c Controlador
 * @param type $total_items Total de items en general 
 * @param type $pagina_actual Pag Actual
 * @return boolean  Si total de paginas es superior a 1 crea el html del paginador, sino regresa falso
 */
function paginacion_master($p, $c, $total_items = 0, $pagina_actual = 0) {
    global $conexion, $cfg_limite_items_en_tablas;
    $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);

    $html = '<nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="index.php?p=' . $p . '" aria-label="Previous">
                        <span aria-hidden="true">&laquo; </span>
                    </a>
                </li>';
    $i = 0;
    while ($i < $total_paginas) {
        $activo = (isset($pagina_actual) && $pagina_actual == $i ) ? ' class="active" ' : '';

        //  $html .= "<li $activo ><a href=\"index.php?p=$plugin&c=$controlador&pag=$i\">$i</a></li>";  

        if ($i >= ($pagina_actual - 4) && $i <= ($pagina_actual + 4)) {
            $html .= "<li $activo ><a href=\"index.php?p=$p&c=$c&pag=$i\">$i</a></li>";
        } else {
            //$html .= "<li ><a href=\"index.php?p=$p&c=$c&pag=$i\">$i - $pagina_actual $activo </a></li>";                        
        }

        $i++;
    }
    $html .= "<li>
                    <a href=\"index.php?p=$p&c=$c&pag=$i\" aria-label=\"Next\">
                        <span aria-hidden=\"true\"> $total_paginas &raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>";
    if ($total_paginas > 1) {
        return $html;
    } else {
        return false;
    }
}
