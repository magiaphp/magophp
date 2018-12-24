<?php

/**
  magia_version: 0.0.8
 * */
function _paginas_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _paginas WHERE id = $id   ", $conexion) or die("Error: _paginas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _paginas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_paginas = mysql_fetch_array($sql)) {
        //include "../gestion/_paginas/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_paginas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_paginas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_paginas[$campo]\">$_paginas[$campo]</option> \n";
    }
}

function _paginas_add($selecionado = "", $excluir = array()) {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _paginas  ", $conexion) or die("Error:" . mysql_error());
    while ($_paginas = mysql_fetch_array($sql)) {

        include "../gestion/_paginas/reg/reg.php";

        echo "<option ";
        // mando solo un elemento selecionado
        if ($selecionado == $_paginas['pagina']) {
            echo " selected ";
        } else {
            echo "";
        }
        // mando un array de paginas a excluir
        if(in_array($_paginas['pagina'], $excluir)){
            echo " disabled ";
        }
                
        
        if ($excluir == $_paginas['pagina']) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_paginas[0]\">$_paginas[0]</option>";
        echo "value=\"$_paginas[pagina]\">$_paginas[pagina]</option>";
    }
}

function _paginas_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _paginas   ", $conexion) or die("Error: _paginas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * Entreta falso o un numero total de paginas
 * @global type $conexion
 * @return boolean
 */
function _paginas_total() {
    global $conexion;
    $sql = mysql_query(
            "SELECT count(*) FROM _paginas   ", $conexion) or die("Error: pedidos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function _paginas_existe($pagina) {
    global $conexion;
    $sql = mysql_query(
            "SELECT id FROM _paginas WHERE pagina = '$pagina'   ", $conexion) or die("Error: _paginas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);


    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

