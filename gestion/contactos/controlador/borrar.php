<?php

<<<<<<< HEAD
/**
  magia_version: 0.0.8
 * */
$accion = "borrar";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $contactos_email = mysql_real_escape_string($_REQUEST['contactos_email']);
    include "./contactos/modelos/borrar.php";
################################################################################
    // Busco el contacto borrado, si lo encuentro no se ha borrado
    if (!contactos_campo_segun_email('id', $contactos_email)) {
        mensaje('info', 'Borrado!');
    } else {
        mensaje('atencion', 'No se pudo borrar este usuario');
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
}
################################################################################
################################################################################
################################################################################
################################################################################
################################################################################
################################################################################
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
        "\$_REQUEST['a']" => "$_REQUEST[a]"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
=======
$contactos_email = mysql_real_escape_string($_REQUEST['contactos_email']);
include "./contactos/modelos/borrar.php";

if (!contactos_campo_segun_email('id', $contactos_email)) {
    mensaje('info', 'Borrado!');
} else {
    mensaje('atencion', 'No se pudo borrar este usuario');
}
    
    
>>>>>>> des
