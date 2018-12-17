<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);
        include "./contactos/reg/post.php";

        // consigo el estatus actual del contacto
        $contactos_estatus_actual = contactos_campo_segun_email('estatus', $contactos_email);
        // echo "<hr>$contactos_estatus_actual<hr>";
        // y si el estatus que viene es diferente 
        if ($contactos_estatus_actual != $contactos_estatus) {
            mensaje('info', 'Estatus actualizado, email enviado a contacto');
            // depende del nuevo estatus, mando el mensaje            

            switch ($contactos_estatus) {
                case 0:
                    // mando el email al nuevo usuario
                    //include "./emails/vista/$contactos_idioma/bloquear_cuenta.php";
                    $email_mensaje = "./emails/vista/$contactos_idioma/bloquear_cuenta.php";

                    (file_exists($email_mensaje)) ?
                                    include "$email_mensaje" :
                                    include "./emails/vista/en_GB/bloquear_cuenta.php"
                    ;

                    emails_enviar($contactos_email, utf8_decode($body), _tr('Cuenta bloqueada', false, $contactos_idioma));
                    echo $body;

                    break;
                case 1:
                    // mando el email al nuevo usuario
                    //include "./emails/vista/$contactos_idioma/activar_cuenta.php";
                    $email_mensaje = "./emails/vista/$contactos_idioma/activar_cuenta.php";

                    (file_exists($email_mensaje)) ?
                                    include "$email_mensaje" :
                                    include "./emails/vista/en_GB/activar_cuenta.php"
                    ;

                    emails_enviar($contactos_email, utf8_decode($body), _tr('Cuenta activada', false, $contactos_idioma));
                    echo $body;
                    break;
                default:
                    break;
            }
        }

        include "./contactos/modelos/editar.php";



        // procedemos a registrar el login 
        $contactos_grupo = (isset($_POST['contactos_grupo'])) ? mysql_real_escape_string(trim($_POST['contactos_grupo'])) : 'centros';
        $contactos_clave = (isset($_POST['contactos_clave'])) ? mysql_real_escape_string(trim($_POST['contactos_clave'])) : false;

        include "./contactos/modelos/editar_grupo.php";

        if ($contactos_clave) {
            $contactos_clave = codifica_clave($contactos_clave);
            include "./contactos/modelos/editar_clave.php";
            // enviar mensaje al admin
            // enviar mensaje al usuario de cambia cambiada
        }





        /*
          include "./contactos/modelos/ver.php";
          include "./contactos/reg/reg.php";
          include "./contactos/vista/ver.php";
         */
    } else {
        $contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);
        include "./contactos/modelos/ver.php";
        include "./contactos/reg/reg.php";
        include "./contactos/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 

if ($config_debug) {
    // Tabla para ver los permisos de cada grupo de usuarios en la pagina presente 
    permisos_plugin_controlador($pagina, $accion);
    
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$accion" => "$accion",
        "\$pagina" => "$pagina",
        "\$_usuarios_grupo" => "$_usuarios_grupo",
        "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)" => permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "$autos_id" => "$autos_id"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
