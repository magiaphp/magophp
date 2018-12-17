<?php
function reserva_estatus_array(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT id FROM reserva_estatus  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    while ($reg = mysql_fetch_array($sql)) {
        array_push($data, $reg[0]);
    }
    
    return $data;
}