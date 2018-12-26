<?php

$contactos_email = mysql_real_escape_string($_REQUEST['contactos_email']);
include "./contactos/modelos/borrar.php";

if (!contactos_campo_segun_email('id', $contactos_email)) {
    mensaje('info', 'Borrado!');
} else {
    mensaje('atencion', 'No se pudo borrar este usuario');
}