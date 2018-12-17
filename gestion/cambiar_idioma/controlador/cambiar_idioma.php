<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "cambiar_idioma";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    
    if (isset($_REQUEST['a']) == 'cambiar_idioma') {
        // colo el usuario que esta conectado
        $email      = $_usuarios_usuario; 
        $idioma     = mysql_real_escape_string($_REQUEST['idioma']);
        
        include "./cambiar_idioma/modelos/cambiar_idioma.php";
        
        echo '<META http-equiv="refresh" content="0; URL=index.php">';  
        

    } else {
        mensaje("info", 'Error');
    }
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
