<?php

/**
  magia_version: 0.0.8
 * */
function _permisos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _permisos WHERE id = $id   ", $conexion) or die("Error: _permisos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _permisos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_permisos = mysql_fetch_array($sql)) {
        //include "../gestion/_permisos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_permisos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_permisos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_permisos[$campo]\">$_permisos[$campo]</option> \n";
    }
}

function _permisos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _permisos  ", $conexion) or die("Error:" . mysql_error());
    while ($_permisos = mysql_fetch_array($sql)) {

        include "../gestion/_permisos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_permisos[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_permisos[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_permisos[0]\">$_permisos[0]</option>";
        echo "value=\"$_permisos[0]\">$_permisos__permisos</option>";
    }
}

function _permisos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _permisos   ", $conexion) or die("Error: _permisos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function _permisos_paginas_segun_grupo($grupo) {
    global $conexion;
    $sql = mysql_query(
            "SELECT pagina FROM _permisos WHERE grupo = '$grupo'   ", $conexion)
            or die("Error: ($grupo)". __FUNCTION__ . __FILE__ . __LINE__ . mysql_error());
    
    $datos = array(); 
    
    while ($_pagina = mysql_fetch_array($sql)) {
        array_push($datos, $_pagina[0]);
        
    }
    return $datos;
}
