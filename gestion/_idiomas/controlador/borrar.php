<?php

/**
  magia_version: 0.0.8
 * */
$accion = "borrar";
$pagina = "_idiomas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
    include "./_idiomas/modelos/borrar.php";
    
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_REQUEST), json_encode($_REQUEST), false);
    
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
