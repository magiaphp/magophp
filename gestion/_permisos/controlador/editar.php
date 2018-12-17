<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "_permisos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);
        include "./_permisos/reg/post.php";

        include "./_permisos/modelos/editar.php";
        logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, $controlador, $accion, json_encode($_POST), $_permisos_id, false);
        
        
        echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '">';

        /*
          include "./_permisos/modelos/ver.php";
          include "./_permisos/reg/reg.php";
          include "./_permisos/vista/ver.php";
         * 
         */
    } else {
        $_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);
        include "./_permisos/modelos/ver.php";
        include "./_permisos/reg/reg.php";
        include "./_permisos/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
