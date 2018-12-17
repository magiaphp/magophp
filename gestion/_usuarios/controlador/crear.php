<?php

mensaje('info',"Los usuarios se crean automaticamente al crear un nuevo contacto");


/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "_usuarios";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {

        include "./_usuarios/reg/post.php";
        // si no tiene email
        if (!$t_usuarios_usuario) {
            mensaje('info', 'Olvido el email');
            die();
        }


        if ($t_usuarios_grupo == 'root') {
            mensaje('info', 'No se puede agregar usuarios root');
            echo $t_usuarios_grupo;
            die();
        }



       // include "./_usuarios/modelos/crear.php";
    } else {
//        include "./_usuarios/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
