<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
$b = (isset($_REQUEST['b'])) ? mysql_real_escape_string(trim($_REQUEST['b'])) : false;

// ordenamos por id por defecto 
$ordenpor = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? $_REQUEST['ordenpor'] : 'id';
//asc / desc
$orden = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? $_REQUEST['orden'] : 'ASC';

include "./contactos/modelos/buscar.php";

<<<<<<< HEAD
    include "./contactos/vista/index.php";
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
=======
include "./contactos/vista/index.php";
>>>>>>> des
