<?php

/**
  magia_version: 0.0.8
 * */
if (permisos_tiene_permiso("ver", "contactos_ajenos", $_usuarios_grupo)) {
    $comando = "SELECT * FROM contactos WHERE id = '$contactos_id'";
} else {
    $comando = "SELECT * FROM contactos WHERE id = '$contactos_id' AND id = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "' ";
}

$sql = mysql_query($comando, $conexion) or die("Error: en el fichero:" . __FILE__ . ' linea: ' . __LINE__ . ' / ' . mysql_error());
$contactos = mysql_fetch_array($sql);
