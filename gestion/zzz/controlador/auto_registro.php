<?php

if (isset($_REQUEST['a']) == 'auto_registro') {

    include "./contactos/reg/post.php";

    if (!$contactos_email) {
        mensaje('info', 'Olvido email');
        die();
    }


    if (contactos_campo_segun_email('id', $contactos_email)) {
        mensaje('info', 'Email ya existe en la base de datos');
        die();
    }

    include "./zzz/modelos/auto_registro.php";

    $contactos_grupo = $config_grupo_por_defecto; 
    $contactos_estatus = 0;
    $contactos_clave_sin_codiicar = genera_clave();
    $contactos_clave = codifica_clave($contactos_clave_sin_codiicar);
    
    
    include "./contactos/modelos/reg_login.php";
   
    
    // Envia email al contacto
    // Envia email al contacto
    // Envia email al contacto
    if($config_enviar_email_contacto_auto_registro){  
        
        $email_template = "./emails/vista/$contactos_idioma/auto_registro.php";
        $email_template_defecto = "./emails/vista/en_GB/auto_registro.php";
        
        if(file_exists($email_template)){
            include "$email_template"; 
        }else{
            include "$email_template_defecto"; 
        }

        


        emails_enviar($contactos_email, utf8_decode($body),_tr('Nuevo usuario',false,$contactos_idioma));
       // echo $body;
       // echo "\$contactos_idioma $contactos_idioma ";
    }
     

    // si el login esta registrado correctamente, 
    if (contactos_campo_segun_email('id', $contactos_email)) {
        echo '<h2>' . _t('Registrado con exito') . '</h2>';
        echo '<h2>' . _t('Revise su email') . '</h2>';
    }
    // enviamos un email
    //echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';
} else{
    echo "noo esta en auto"; 
}