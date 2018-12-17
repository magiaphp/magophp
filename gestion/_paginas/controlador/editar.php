<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "_paginas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
        include "./_paginas/reg/post.php";
        include "./_paginas/modelos/editar.php";

        include "./_paginas/modelos/ver.php";
        include "./_paginas/reg/reg.php";
        include "./_paginas/vista/ver.php";
    } else {
        $_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
        include "./_paginas/modelos/ver.php";
        include "./_paginas/reg/reg.php";
        include "./_paginas/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
