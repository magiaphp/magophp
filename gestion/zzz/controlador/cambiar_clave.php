<?php

if (isset($_REQUEST['a']) == 'cambiar_clave') {

    $codigo = (isset($_POST['codigo'])) ? mysql_real_escape_string(trim($_POST['codigo'])):null;
    $email  = (isset($_POST['email'])) ? mysql_real_escape_string(trim($_POST['email'])):null;
    $clave  = (isset($_POST['clave'])) ? mysql_real_escape_string(trim($_POST['clave'])):null;

    if (!$codigo || !$email || $clave) {
        mensaje('info', 'Llene todos los campos');
        die();
    }

    if (!contactos_campo_segun_email('id', $email)) {
        mensaje('info', 'Error, contacte con el administrador');
        die();
    }
    
    // si el codigo corresponde al codigo dado
    if(cambio_claves_campo_segun_email('codigo', $email) == $codigo){
        // cambio de clave, 
        $_usuarios_usuario = $email;
        $t_usuarios_clave_nueva = $clave;
        $contactos_idioma = contactos_campo_segun_email('idioma', $email);
        
        // envio email al usuario
        include "./emails/vista/$contactos_idioma/confirmacion_cambio_clave.php";
        emails_enviar($email, utf8_decode($body), _tr("Clave cambiada",false,$contactos_idioma));
        
       // echo $body;
        
                
        
        // envio email al administrador 
        $contactos_idioma = contactos_campo_segun_email('idioma', $email_usuario);
        include "./emails/vista/$contactos_idioma/confirmacion_cambio_clave.php";
        emails_enviar($email_usuario, utf8_decode($body), _tr('Clave cambiada',false,$contactos_idioma));   
        //echo $body;
        
    }   
    
    // enviamos un email
    //echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';
} else{
    include "./zzz/vista/recup_clave.php";
}