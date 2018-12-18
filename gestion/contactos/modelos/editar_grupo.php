 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 
 if (permisos_tiene_permiso("editar", "contactos_ajenos", $_usuarios_grupo)) {
    $comando = "UPDATE _usuarios SET grupo = '$contactos_grupo'  WHERE usuario = '$contactos_email'"; 
} else {
    $comando = "UPDATE _usuarios SET grupo = '$contactos_grupo'  WHERE usuario = '$contactos_email' AND id = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "'  ";
}




 $sql=mysql_query($comando,$conexion) or die ("Error: ".mysql_error());  


 
if ($config_debug) {


    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$comando" => "$comando",
        "\$sql" => "$sql    ",
        
        "\$_usuarios_grupo" => "$_usuarios_grupo",
        "permisos_tiene_permiso(editar, contactos_ajenos, \$_usuarios_grupo)" => permisos_tiene_permiso("editar", "contactos_ajenos", $_usuarios_grupo),
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