<?php

/**
  magia_version: 0.0.8
 * */
function _usuarios_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _usuarios WHERE id = $id   ", $conexion) or die("Error: _usuarios_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _usuarios_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($z_usuarios = mysql_fetch_array($sql)) {
        //include "../gestion/_usuarios/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $z_usuarios[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $z_usuarios[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$z_usuarios[$campo]\">$z_usuarios[$campo]</option> \n";
    }
}

function _usuarios_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _usuarios  ", $conexion) or die("Error:" . mysql_error());
    while ($z_usuarios = mysql_fetch_array($sql)) {

        include "../gestion/_usuarios/reg/reg.php";

        echo "<option ";
        if ($selecionado == $z_usuarios[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $z_usuarios[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$z_usuarios[0]\">$z_usuarios[0]</option>";
        echo "value=\"$z_usuarios[0]\">$z_usuarios__usuarios</option>";
    }
}

function _usuarios_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _usuarios   ", $conexion) or die("Error: _usuarios_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function _usuarios_campo_segun_email($campo, $email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _usuarios WHERE usuario = '$email'   ", $conexion) or die("Error: _usuarios_campo_segun_email()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _usuarios_total_segun_grupo($grupo) {
    global $conexion;
    $sql = mysql_query(
            "SELECT COUNT(id) FROM _usuarios WHERE grupo = '$grupo'   ", $conexion) or die("Error: _usuarios_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
