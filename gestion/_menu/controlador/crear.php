<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./_menu/reg/post.php";
    include "./_menu/modelos/crear.php";
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_POST), false, false);
} else {
    include "./_menu/vista/crear.php";
}