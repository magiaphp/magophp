<?php
echo "<p>Los usuarios se editan via los contactos</p>"; 
/*
$accion = "editar";
$pagina = "_usuarios";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $t_usuarios_id = mysql_real_escape_string($_REQUEST['t_usuarios_id']);
        include "./_usuarios/reg/post.php";
        include "./_usuarios/modelos/editar.php";

        include "./_usuarios/modelos/ver.php";
        include "./_usuarios/reg/ttt.php";
        include "./_usuarios/vista/ver.php";
    } else {
        $t_usuarios_id = mysql_real_escape_string($_REQUEST['t_usuarios_id']);        
        include "./_usuarios/modelos/ver.php";
        include "./_usuarios/reg/ttt.php";
        include "./_usuarios/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
*/