<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./_grupos/reg/post.php";
    #verfica si viene el grupo
    if ($_grupos_grupo) {
        # agrego el grupo
        # agrego el grupo
        # agrego el grupo
        include "./_grupos/modelos/crear.php";
        # registro en log

        logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, 'controlador', $accion, json_encode($_POST), false, false);
    } else {
        mensaje('info', 'Olvido el nombre del grupo');
    }
    # Con esto verifico que el grupo se ha registrado correctamente
    # Con esto verifico que el grupo se ha registrado correctamente
    # Con esto verifico que el grupo se ha registrado correctamente
    if (_grupos_existe($_grupos_grupo)) {
        echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
    } else {
        mensaje('error', 'Operación no realizada');
    }
} else {
    include "./_grupos/vista/crear.php";
}

permisos_plugin_controlador($pagina, $accion);
