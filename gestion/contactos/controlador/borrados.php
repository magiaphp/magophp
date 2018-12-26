<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
// ordenamos por id por defecto 
$ordenpor = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? $_REQUEST['ordenpor'] : ' id ';
//asc / desc
$orden = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? $_REQUEST['orden'] : ' DESC ';


include "./contactos/modelos/borrados.php";
include "./contactos/vista/index.php";


