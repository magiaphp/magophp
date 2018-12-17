<?php

/**
  magia_version: 0.0.8
 * */
$accion = "borrar";
$pagina = "_paginas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
    include "./_paginas/modelos/borrar.php";
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
