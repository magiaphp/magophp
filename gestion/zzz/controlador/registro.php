<?php
 $a = (isset($_GET['a'])) ? mysql_real_escape_string(trim($_REQUEST['a'])):'null';
 
 
if ($a == 'registro') {
    $email = (isset($_GET['email'])) ? mysql_real_escape_string(trim($_GET['email'])):false;
        // verifico que el email enviado no este ya registrado en la base de datos 

    if (!$email) {
        mensaje('info', 'Email necesario');
        die();
    }


    if (contactos_campo_segun_email('id', $email)) {
        mensaje('info', 'Email ya existe en nuestra base de datos');
        die();
    }
    include "./zzz/vista/registro_datos_empresa.php";
} else {

    include "./zzz/vista/registro_verif_email.php";
}


?>