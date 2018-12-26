<?php

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



     include "./_usuarios/modelos/crear.php";
} else {
        include "./_usuarios/vista/crear.php";
}