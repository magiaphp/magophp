<?php

/**
  magia_version: 0.0.8
 * */
function _idiomas_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _idiomas WHERE id = $id   ", $conexion) or die("Error: _idiomas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _idiomas_segun_iso($iso) {
    global $conexion;
    $sql = mysql_query(
            "SELECT nombre FROM _idiomas WHERE idioma = '$iso'  ", $conexion) or die("Error: _idiomas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function _idiomas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_idiomas = mysql_fetch_array($sql)) {
        //include "../gestion/_idiomas/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_idiomas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_idiomas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_idiomas[$campo]\">$_idiomas[$campo]</option> \n";
    }
}

function _idiomas_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _idiomas WHERE activo = '1'order by orden  ", $conexion) or die("Error:" . mysql_error());
    while ($_idiomas = mysql_fetch_array($sql)) {

        include "../gestion/_idiomas/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_idiomas['idioma']) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_idiomas['idioma']) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_idiomas[0]\">$_idiomas[0]</option>";
        echo "value=\"$_idiomas[idioma]\">$_idiomas[idioma] - $_idiomas[nombre]</option>";
    }
}

function _idiomas_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _idiomas   ", $conexion) or die("Error: _idiomas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * entrega los idiomas activos
 * @global type $conexion
 * @return array
 */
function _idiomas_array() {
    global $conexion;

    $g = array();

    $sql = mysql_query(
            "SELECT idioma FROM _idiomas WHERE activo ='1' ORDER BY orden ", $conexion) or die("Error: _grupos_array()" . mysql_error());

    while ($reg = mysql_fetch_array($sql)) {

        array_push($g, $reg['idioma']);
        
    }

    return $g;
}
function _idiomas() {
    return _idiomas_array();
}
