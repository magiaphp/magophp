<?php

/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 * @package _menu
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _menu_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _menu WHERE id = $id   ", $conexion) or die("Error: _menu_campo()" . mysql_error());
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
 * @package _menu
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _menu_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_menu = mysql_fetch_array($sql)) {
        //include "../gestion/_menu/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_menu[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_menu[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_menu[$campo]\">$_menu[$campo]</option> \n";
    }
}
/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 * @package _menu
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _menu_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _menu  ", $conexion) or die("Error:" . mysql_error());
    while ($_menu = mysql_fetch_array($sql)) {

        include "../gestion/_menu/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_menu[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_menu[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_menu[0]\">$_menu[0]</option>";
        echo "value=\"$_menu[0]\">$_menu__menu</option>";
    }
}
/**
 * 
 * @global type $conexion
 * @return boolean
 * @package _menu
 * @version 0.0.1
 * @author Robinson Coello <robinson@coello.be> 
 */
function _menu_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _menu   ", $conexion) or die("Error: _menu_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
