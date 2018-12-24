<?php

/**
  magia_version: 0.0.8
 * */
function _traducciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _traducciones WHERE id = $id   ", $conexion) or die("Error: _traducciones_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _traducciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_traducciones = mysql_fetch_array($sql)) {
        //include "../gestion/_traducciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_traducciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_traducciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_traducciones[$campo]\">$_traducciones[$campo]</option> \n";
    }
}

function _traducciones_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _traducciones  ", $conexion) or die("Error:" . mysql_error());
    while ($_traducciones = mysql_fetch_array($sql)) {

        include "../gestion/_traducciones/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_traducciones[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_traducciones[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_traducciones[0]\">$_traducciones[0]</option>";
        echo "value=\"$_traducciones[0]\">$_traducciones__traducciones</option>";
    }
}

function _traducciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _traducciones   ", $conexion) or die("Error: _traducciones_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
function _traducciones_total_segun_idioma($idioma="") {
    global $conexion;
    $sql = mysql_query(
            "SELECT COUNT(id) FROM _traducciones wHERE idioma = '$idioma'   ", $conexion) or die("Error: _traducciones_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
function _traducciones_segun_idioma_frase($idioma,$frase) {
    global $conexion;
    $sql = mysql_query(
            "SELECT traduccion FROM _traducciones wHERE idioma = '$idioma' AND frase = '$frase'   ", $conexion) or die("Error: _traducciones_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
