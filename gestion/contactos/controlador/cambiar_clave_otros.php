<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
   
    if (isset($_REQUEST['a']) == 'cambiar_clave_otros') {

        $t_usuarios_clave_nueva = (isset($_POST['t_usuarios_clave_nueva'])) ? mysql_real_escape_string(trim($_POST['t_usuarios_clave_nueva'])) : false;
      

        if (!$t_usuarios_clave_nueva) {
            mensaje('info', 'Olvido su clave actual');
            die();
        }


        include "./_usuarios/modelos/cambiar_clave_otros.php";
        
        
        
        echo '<META http-equiv="refresh" content="0; URL=z_logout.php">';        
        
    } else {
        include "./_usuarios/vista/cambiar_clave.php";
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