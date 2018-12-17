<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "_idiomas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {
        include "./_idiomas/reg/post.php";
        include "./_idiomas/modelos/crear.php";
        logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_POST), false, false);
        
    } else {
        include "./_idiomas/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
