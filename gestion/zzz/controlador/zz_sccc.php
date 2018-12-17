<?php

if (isset($_REQUEST['a']) == 'zz_sccc') {


    $email = (isset($_POST['email'])) ? mysql_real_escape_string(trim($_POST['email'])) : null;

    if (!$email) {
        mensaje('info', 'Olvido el email');
        die();
    }

    if (!contactos_campo_segun_email('id', $email)) {
        mensaje('info', 'Usuario no existe');
        die();
    }
    if (cambio_claves_campo_segun_email('codigo_usado', $email)) {
        mensaje('info', 'Codigo usado');
        die();
    }
    $cambio_claves_usuario = $email;
    $cambio_claves_codigo = genera_clave();
    $cambio_claves_codigo_usado = 0;
    include './cambio_claves/modelos/crear.php';
    
    $contactos_idioma = contactos_campo_segun_email('idioma', $email);
    
    include "./emails/vista/$contactos_idioma/solicitud_cambio_clave.php";    
    emails_enviar($email, utf8_decode($body),_tr("Cambio de clave solicitado",false,$contactos_idioma));
    //echo $body; 
    
    mensaje('info', 'Verifique su email');
    


    // enviamos un email
    //echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';
} else {
    include "./zzz/vista/solicitar_codigo_cambio_clave.php";
}