<?php
/**
 * Incluye el controlador $c pasado como argumento
 * @param type $p Plugin deseado
 * @param type $c Controlador desaado
 */
function incluir_modelo($p, $c){
    
    $filename = MAGIA_GESTION_PATH."/$p/controlador/$c.php"; 
    
    if(file_exists($filename)){
        include $filename;
    }else{
        echo "El fichero $filename no eexiste"; 
    }
    
}
