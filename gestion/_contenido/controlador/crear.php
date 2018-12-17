<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "_contenido";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {
       // include "./_contenido/reg/post.php";
       // include "./_contenido/modelos/crear.php";
    } else {
         
        mensaje("info","Contacte con el administrador");
        mensaje("info","El contenido se genera automaticamnte, no puede agregar");
        
        //include "./_contenido/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
