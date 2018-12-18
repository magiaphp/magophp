<?php

/**
  magia_version: 0.0.11
 * */
$accion = "buscar";
$pagina = "_actualizaciones";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    include "./_actualizaciones/modelos/buscar.php";
    include "./_actualizaciones/vista/buscar.php";
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
        "\$_REQUEST['a']" => "$_REQUEST[a]"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}