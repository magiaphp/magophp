<?php

if (isset($_GET['a']) == "borrar") {
    $_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
    include "./_paginas/modelos/borrar.php";
    
    // poner log
    // poner redireccion
    redireccion("index.php?p=_paginas");
    
} else {

    $_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);

    include "./_paginas/modelos/ver.php";
    include "./_paginas/reg/reg.php";
    include "./_paginas/vista/ver.php";

    if (permisos_tiene_permiso("borrar", "_paginas", $_usuarios_grupo)) {
        include "./_paginas/vista/borrar.php"; 
    }
}
