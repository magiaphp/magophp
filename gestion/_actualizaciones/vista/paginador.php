<?php 
 /**  
 magia_version: 0.0.11 
 **/ 


function paginacion($p, $c, $inicia = 0, $pagina_actual) {
    global $conexion, $cfg_limite_items_en_tablas, $inicia;

    include "./$p/modelos/$c.php";

    $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);

    $html = '<nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="index.php?p=' . $p . '" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>';
                $i = 0;
                while ($i < $total_paginas) {                                                            
                    $activo = (isset($pagina_actual) && $pagina_actual == $i ) ? ' class="active" ' : '';
                  //  $html .= "<li $activo ><a href=\"index.php?p=$plugin&c=$controlador&pag=$i\">$i</a></li>";                    
                    if( $i >= ($pagina_actual-4) && $i <= ($pagina_actual+4) ){                    
                    $html .= "<li $activo ><a href=\"index.php?p=$p&c=$c&pag=$i\">$i</a></li>";                    
                    }
                    
                    $i++;
                }
                $html .= '<li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>';    
    if($total_paginas){return $html;}else{    return false;}   
}
?>