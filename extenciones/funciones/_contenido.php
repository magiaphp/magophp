<?php

/**
  magia_version: 0.0.8
 * */
/**
 * Otiene un valor del $campo de la tabla _contenido segun el $id que le pase 
 * @global type $conexion
 * @param type $campo Nombre de campo 
 * @param type $id identificador del registro el cual deseo el vallr del $campo
 * @return boolean Regreso el $campo o false segun exixta o no
 */
function _contenido_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _contenido WHERE id = $id   ", $conexion) or die("Error: _contenido_campo()" . mysql_error());
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
 * @todo A verificar, posible error (coje de _menu)
 */
function _contenido_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_contenido = mysql_fetch_array($sql)) {
        //include "../gestion/_contenido/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_contenido[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_contenido[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_contenido[$campo]\">$_contenido[$campo]</option> \n";
    }
}
/**
 * @todo poner un array de valores a excluir, 
 * @todo quitar de la lista los valores a excluir, actualmente solo desactivados 
 * Crea los items de un select de la tabla _contenido
 * <pre>
 * <option value="$_contenido[frase]">$_contenido[frase]</option>
 * </pre>
 * @global type $conexion
 * @param type $selecionado valor a ser seleccionado 
 * @param type $excluir Valor a excluir de la lista
 * @return type html <option>
 */
function _contenido_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _contenido order by frase  ", $conexion) or die("Error:" . mysql_error());
    while ($_contenido = mysql_fetch_array($sql)) {

        include "../gestion/_contenido/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_contenido['frase']) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_contenido['frase']) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_contenido[0]\">$_contenido[0]</option>";
        echo "value=\"$_contenido[frase]\">$_contenido[frase]</option>";
    }
}
/**
 * Regresa el id mas alto de la tabla _contenido
 * @global type $conexion
 * @return boolean Si hay un valor regresa el max, sino regresa falso
 */
function _contenido_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _contenido   ", $conexion) or die("Error: _contenido_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
