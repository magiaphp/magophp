<?php

if (isset($_REQUEST['a']) == 'editar') {

    $email = mysql_real_escape_string($_REQUEST['email']);
    $idioma = mysql_real_escape_string($_REQUEST['idioma']);

    include "./contactos/modelos/cambiar_idioma.php";
} else {
    mensaje("info", 'Error');
}

