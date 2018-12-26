<?php

if (isset($_REQUEST['a']) == 'cambiar_idioma') {
    // colo el usuario que esta conectado
    $email = $_usuarios_usuario;
    $idioma = mysql_real_escape_string($_REQUEST['idioma']);

    include "./cambiar_idioma/modelos/cambiar_idioma.php";

    echo '<META http-equiv="refresh" content="0; URL=index.php">';
} else {
    mensaje("info", 'Error');
}