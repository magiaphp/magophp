<?php

/**
 * Regresa el valor de un $campo de la tabla segun su $id
 * @global type $conexion
 * @param type $campo Nombre del campo en la tabla
 * @param type $id identificador unico
 * @return boolean Regresa el valor que el $campo tiene
 * @package gestion/_actualizaciones
 */
function _actualizaciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query("SELECT $campo FROM _actualizaciones WHERE id = $id   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $label
 * @param type $selecionado
 * @param type $excluir
 * @package gestion/_actualizaciones
 * @todo Poner en array los items a excluir
 */
function _actualizaciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($_actualizaciones = mysql_fetch_array($sql)) {
        //include "../gestion/_actualizaciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_actualizaciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_actualizaciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_actualizaciones[$campo]\">$_actualizaciones[$campo]</option> \n";
    }
}
/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 * @package gestion/_actualizaciones
 */
function _actualizaciones_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _actualizaciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($_actualizaciones = mysql_fetch_array($sql)) {

        include "../gestion/_actualizaciones/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_actualizaciones[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_actualizaciones[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_actualizaciones[0]\">$_actualizaciones[0]</option>";
        echo "value=\"$_actualizaciones[0]\">$_actualizaciones__actualizaciones</option>";
    }
}

/**
 * 
 * @global type $conexion
 * @return boolean
 * @package gestion/_actualizaciones
 */

function _actualizaciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _actualizaciones   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


