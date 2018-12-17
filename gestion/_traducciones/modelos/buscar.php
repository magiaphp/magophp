<?php

/**
  magia_version: 0.0.8
 * */
if ($_traducciones_idioma != 'todas') {
    $comando = "SELECT *  
        FROM _traducciones  
        WHERE  
            frase like '%$_traducciones_frase%' "
            . "AND  idioma like '%$_traducciones_idioma%' "
            . "AND  traduccion like '%$_traducciones_traduccion%' ORDER BY id DESC  Limit $inicia, $cfg_limite_items_en_tablas     ";
} else {
    $comando = " SELECT *  
        FROM _traducciones  
        WHERE  
            frase like '%$_traducciones_frase%' "
            . "AND  traduccion like '%$_traducciones_traduccion%'  ORDER BY id DESC Limit $inicia, $cfg_limite_items_en_tablas    ";
}

$sql = mysql_query("$comando ", $conexion) or die("Error:" . mysql_error());

// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ", $conexion));
