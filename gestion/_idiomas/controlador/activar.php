<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "_idiomas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'activar') {
        $_idiomas_idioma = mysql_real_escape_string($_REQUEST['_idiomas_idioma']);
        $_idiomas_activo = mysql_real_escape_string($_REQUEST['_idiomas_activo']);
//        include "./_idiomas/reg/post.php";
        include "./_idiomas/modelos/activar.php";
        echo '<meta http-equiv="refresh" content="0; url=index.php?p='.$p.'&c=index">';   
        

        
    } 
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
