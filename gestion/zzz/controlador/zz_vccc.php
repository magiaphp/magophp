<?php

if (isset($_REQUEST['a']) == 'zz_vccc') {


    
    
    $codigo = (isset($_POST['codigo'])) ? mysql_real_escape_string(trim($_POST['codigo'])):null;
    $email  = (isset($_POST['email'])) ? mysql_real_escape_string(trim($_POST['email'])):null;
    $clave  = (isset($_POST['clave'])) ? mysql_real_escape_string(trim($_POST['clave'])):null;

    if (!$codigo || !$email || !$clave) {
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
        
        echo "<h1>";
        echo _t('Cambio de clave ok'); 
        echo "</h1>"; 
        
        $t_usuarios_clave_nueva = $clave;
        $_usuarios_usuario = $email; 
        include "./_usuarios/modelos/cambiar_clave.php";
        
        // pongo al dia el codigo usado
        $cambio_claves_usuario = $email;
        $cambio_claves_codigo = $codigo;
        include "./cambio_claves/modelos/cambiar_a_codigo_usado.php";
        
        
        // envio email al usuario
        
        $contactos_idioma = contactos_campo_segun_email('idioma', $email);
        
        include "./emails/vista/$contactos_idioma/confirmacion_cambio_clave.php";
        emails_enviar($email, utf8_decode($body), _tr('Cambio de clave realizado',false,$contactos_idioma));
                
        

        
    } else{
        mensaje('info', 'Código incorrecto');
    }  
    
    // enviamos un email
    //echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';
} else{
    include "./zzz/vista/veri_cod_cambio_clave.php";
}