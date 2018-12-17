<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "_traducciones";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {
        include "./_traducciones/reg/post.php";
        include "./_traducciones/modelos/crear.php";
        echo '<meta http-equiv="refresh" content="0; url=index.php?p=_contenido&c=atraducir">';
    } else {
        include "./_traducciones/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
