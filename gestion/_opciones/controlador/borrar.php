<?php

if (isset($_GET['a']) && $_GET['a'] == "borrar") {
    $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);
    include "./_opciones/modelos/borrar.php";

    redireccion("index.php?p=_opciones");
} else {
    $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);
    //include "./_opciones/reg/get.php";
    include "./_opciones/modelos/ver.php";
    include "./_opciones/reg/reg.php";
    include "./_opciones/vista/ver.php";
    include "./_opciones/vista/borrar.php";
    
    
    
}
