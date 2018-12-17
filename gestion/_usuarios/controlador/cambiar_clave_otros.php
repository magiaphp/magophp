<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "cambiar_clave_otros";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
   
    if (isset($_REQUEST['a']) == 'cambiar_clave_otros') {

        $t_usuarios_clave_nueva = (isset($_POST['t_usuarios_clave_nueva'])) ? mysql_real_escape_string(trim($_POST['t_usuarios_clave_nueva'])) : false;
      

        if (!$t_usuarios_clave_nueva) {
            mensaje('info', 'Olvido su clave actual');
            die();
        }


        include "./_usuarios/modelos/cambiar_clave_otros.php";
        
        
        
        echo '<META http-equiv="refresh" content="0; URL=z_logout.php">';        
        
    } else {
        include "./_usuarios/vista/cambiar_clave.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
