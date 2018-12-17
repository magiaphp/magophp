<?php

function parkings_go() {
    echo "parking_go";
}

function parkings_id_array() {
    global $conexion, $_usuarios_grupo, $_usuarios_usuario;
    
    $data = array();
    if (permisos_tiene_permiso('ver', "parkings_ajenos", $_usuarios_grupo)) {
        $comando = "SELECT id FROM parkings ORDER BY ciudad";
    } else {
        $comando = "SELECT id FROM parkings WHERE  id_contacto = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "'  ORDER BY ciudad";
    }

    $sql = mysql_query($comando, $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        array_push($data, $reg[0]);
    }

    return $data;
}
