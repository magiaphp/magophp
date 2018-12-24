<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./_idiomas/reg/post.php";
    include "./_idiomas/modelos/crear.php";
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_POST), false, false);
} else {
    include "./_idiomas/vista/crear.php";
}