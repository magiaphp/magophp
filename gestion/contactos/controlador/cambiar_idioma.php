<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "cambiar_idioma";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    
    if (isset($_REQUEST['a']) == 'editar') {
        
        $email      = mysql_real_escape_string($_REQUEST['email']);
        $idioma     = mysql_real_escape_string($_REQUEST['idioma']);
        
        include "./contactos/modelos/cambiar_idioma.php";
        

    } else {
        mensaje("info", 'Error');
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