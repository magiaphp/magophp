<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "cambiar_clave";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'cambiar_clave') {

        $t_usuarios_clave_actual = (isset($_POST['t_usuarios_clave_actual'])) ? mysql_real_escape_string(trim($_POST['t_usuarios_clave_actual'])) : false;
        $t_usuarios_clave_nueva = (isset($_POST['t_usuarios_clave_nueva'])) ? mysql_real_escape_string(trim($_POST['t_usuarios_clave_nueva'])) : false;
        $t_usuarios_clave_repita = (isset($_POST['t_usuarios_clave_repita'])) ? mysql_real_escape_string(trim($_POST['t_usuarios_clave_repita'])) : false;

        if($config_debug){
            echo "t_usuarios_clave_actual : $t_usuarios_clave_actual <br>"; 
            echo "t_usuarios_clave_nueva : $t_usuarios_clave_nueva <br>"; 
            echo "t_usuarios_clave_repita : $t_usuarios_clave_repita <br>"; 
            echo "clave azctual codificada  ".codifica_clave($t_usuarios_clave_actual)."<br>"; 
            echo "clave sistema codificada  ". _usuarios_campo_segun_email('clave', $_usuarios_clave)."<br>"; 
            echo "_usuarios_clave: $_usuarios_clave<br>"; 
        }
        

        if (!$t_usuarios_clave_nueva) {
            mensaje('info', 'Olvido su clave nueva');
            die();
        }
        if ($t_usuarios_clave_nueva != $t_usuarios_clave_repita) {
            mensaje('info', 'Claves nueva y repetición no son iguales');
            die();
        }


        

        include "./_usuarios/modelos/cambiar_clave.php";
        
        if(!$config_debug){
            echo '<META http-equiv="refresh" content="0; URL=z_logout.php">';        
        }
        
    } else {
        include "./_usuarios/vista/cambiar_clave.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
