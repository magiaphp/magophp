<?php
/**
 * Obtiene un valor del $campo de la tabla segun su $id 
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 * @package gestion/_grupos
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be>
 */
function _grupos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _grupos WHERE id = $id   ", $conexion) or die("Error: _grupos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

/**
 * Crea los items del select con los distintos valores segun el $campo
 * @global type $conexion
 * @param type $campo
 * @param type $label
 * @param type $selecionado
 * @param type $excluir
 * @package gestion/_grupos
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _grupos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _grupo order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_grupos = mysql_fetch_array($sql)) {
        //include "../gestion/_grupos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_grupos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_grupos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_grupos[$campo]\">$_grupos[$campo]</option> \n";
    }
}

/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 * @package gestion/_grupos
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be>
 * @ 
 */
function _grupos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _grupos order by orden ", $conexion) or die("Error:" . mysql_error());

    while ($_grupos = mysql_fetch_array($sql)) {

        include "../gestion/_grupos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_grupos_grupo) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_grupos_grupo) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_grupos[0]\">$_grupos[0]</option>";
        echo "value=\"$_grupos_grupo\">" . ucfirst(_tr($_grupos_grupo)) . "</option>";
    }
}
/**
 * 
 * @global type $conexion
 * @return boolean
 * @package gestion/_grupos
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _grupos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _grupos   ", $conexion) or die("Error: _grupos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * 
 * @global type $conexion
 * @return array
 * @package gestion/_grupos
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _grupos_array_grupos() {
    global $conexion;
    $sql = mysql_query(
            "SELECT grupo FROM _grupos ORDER BY grupo  ", $conexion)
            or die("Error: _grupos_array_grupos()" . mysql_error());

    $g = array();

    while ($reg = mysql_fetch_array($sql)) {

        array_push($g, $reg[0]);
    }

    return $g;
}
/**
 * 
 * @global type $conexion
 * @return array
 * @package gestion/_grupos
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _grupos_array() {
    global $conexion;

    $g = array();

    $sql = mysql_query(
            "SELECT * FROM _grupos order by orden     ", $conexion) or die("Error: _grupos_array()" . mysql_error());

    while ($reg = mysql_fetch_array($sql)) {

        array_push($g, $reg['grupo']);
    }

    return $g;
}

/**
 * Alias de _grupos_array()
 * @global type $conexion
 * @return array
 * @package gestion/_grupos
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _grupos() {
    return _grupos_array();
}
/**
 * 
 * @global type $conexion
 * @param type $grupo
 * @return boolean
 */
function _grupos_existe($grupo) {
    global $conexion;
    $sql = mysql_query(
            "SELECT id,grupo FROM _grupos WHERE grupo = '$grupo'   ", $conexion) or die("Error: _grupos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
