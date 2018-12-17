<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {



    if (isset($_REQUEST['a']) == 'crear') {

        include "./contactos/reg/post.php";

        // si no se envia email
        if (!$contactos_email) {
            mensaje('info', 'Olvido email');
            die();
        }


        // si ya existe
        if (contactos_campo_segun_email('id', $contactos_email)) {
            mensaje('info', 'Email ya existe en la base de datos');
            die();
        }



        include "./contactos/modelos/crear.php";

        // procedemos a registrar el login 
        $contactos_grupo = (isset($_POST['contactos_grupo'])) ? mysql_real_escape_string(trim($_POST['contactos_grupo'])) : 'centros';
        //  $contactos_email = (isset($_POST['contactos_email'])) ? mysql_real_escape_string(trim($_POST['contactos_email'])):null;







        $contactos_clave_sin_codificar = (isset($_POST['contactos_clave'])) ? mysql_real_escape_string(trim($_POST['contactos_clave'])) : genera_clave();

        $contactos_clave = codifica_clave($contactos_clave_sin_codificar);

        // paso el estatus 1 al usuario
        $contactos_estatus = 1;
        include "./contactos/modelos/reg_login.php";

        // verificamos que se ha registrado el contacto y el login 
        if (
                contactos_campo_segun_email('id', $contactos_email) &&
                _usuarios_campo_segun_email('id', $contactos_email)
        ) {
            // enviamos un email al usuario             
            //include "./emails/vista/$contactos_idioma/invitacion_al_crear_cuenta.php";

            $email_mensaje = "./emails/vista/$contactos_idioma/invitacion_al_crear_cuenta.php";

            (file_exists($email_mensaje)) ?
                            include "$email_mensaje" :
                            include "./emails/vista/en_GB/invitacion_al_crear_cuenta.php"
            ;










            emails_enviar($contactos_email, utf8_decode($body), _tr('Nueva cuenta creada', false, $contactos_idioma));
        } else {
            // caso de no haber registro en la tabla mandamos el error 
            mensaje('atencion', 'Error al registrar este usuario');
        }







        // echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';
    } else {
        include "./contactos/vista/crear.php";
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