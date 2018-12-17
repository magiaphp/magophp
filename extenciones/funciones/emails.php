<?php
/**
 * 
 * @global type $config_nombre_web
 * @global type $config_email_nombre
 * @global type $config_email_email
 * @global type $config_idioma
 * @param type $email
 * @param type $body
 * @param type $sujeto
 */
function emails_enviar($email, $body, $sujeto = '') {
    global 
    $config_nombre_web,
    $config_email_nombre,
    $config_email_email,
    $config_idioma;
    // Datos del destinatario segun email 
    $destino_empresa = (contactos_campo_segun_email('empresa', $email)) ? contactos_campo_segun_email('empresa', $email) : _tr('Empresa');
    $destino_contacto = (contactos_campo_segun_email('contacto', $email)) ? contactos_campo_segun_email('contacto', $email) : _tr('Contacto');
    // buscamos el dioma del usuario, caso que no tenga configurado
    // cojemos el idioma por defecto del sitio 
    $destino_idioma = (contactos_campo_segun_email('idioma', $email)) ? contactos_campo_segun_email('idioma', $email) : $config_idioma;
    $destino_email = $email;


    /**
     * This example shows sending a message using PHP's mail() function.
     */
    // saco esto y lo pongo fuera porque me da error
    require '../includes/PHPMailer-5.2.23/PHPMailerAutoload.php';


//Create a new PHPMailer instance
    $mail = new PHPMailer;
//Set who the message is to be sent from
    $mail->setFrom($config_email_email, "$config_email_nombre");
//Set an alternative reply-to address
    // Datos del destinatario
    $mail->addReplyTo($destino_email, "$destino_contacto");
//Set who the message is to be sent to
    $mail->addAddress($destino_email, "$destino_contacto");
    // copia para el admin
    $mail->addBCC($config_email_email, "$config_email_nombre");
//Set the subject line
    $mail->Subject = "$config_nombre_web : $sujeto";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $mail->msgHTML($body);
    // $mail->msgHTML(file_get_contents('../gestion/emails/vista/pedido_nuevo.php'), dirname(__FILE__));
//Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';
//Attach an image file
    //  $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
}
