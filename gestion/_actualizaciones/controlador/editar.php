<?php

/**
  magia_version: 0.0.11
 * */
$accion = "editar";
$pagina = "_actualizaciones";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $_actualizaciones_id = mysql_real_escape_string($_REQUEST['_actualizaciones_id']);
        include "./_actualizaciones/reg/post.php";
        include "./_actualizaciones/modelos/editar.php";

        include "./_actualizaciones/modelos/ver.php";
        include "./_actualizaciones/reg/reg.php";
        include "./_actualizaciones/vista/ver.php";
    } else {
        $_actualizaciones_id = mysql_real_escape_string($_REQUEST['_actualizaciones_id']);
        include "./_actualizaciones/modelos/ver.php";
        include "./_actualizaciones/reg/reg.php";
        include "./_actualizaciones/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
}

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$accion" => "$accion",
        "\$pagina" => "$pagina",
        "\$_usuarios_grupo" => "$_usuarios_grupo",
        "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)" => permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "$_actualizaciones_id" => "$_actualizaciones_id"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}