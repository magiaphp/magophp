<?php
/**
 * Busca si existe la placa dada y regresa su id
 * @global type $conexion
 * @param type $placa
 * @return boolean
 */
function autos_busca_placa($placa) {
    global $conexion;
    $sql = mysql_query(
            "SELECT id FROM autos WHERE placa = '$placa'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}