<?php

/**
 * 
 * @global type $conexion
 * @param type $frase
 * @param type $contexto
 * @return boolean
 */
function contenido_existe_frase_en_contenido($frase, $contexto = "") {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);

    $contexto = sql_pone_barra_invertida($contexto);

    if (!$contexto) {
        $comando = "SELECT id FROM _contenido WHERE frase = '$frase' ";
    } else {
        $comando = "SELECT id FROM _contenido WHERE frase = '$frase' AND contexto = '$contexto'";
    }
    $sql = mysql_query("$comando  ", $conexion) or die("Problemas traductor_buscar_frase: " . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg['id']) {
        return TRUE;
    } else {
        return FALSE;
    }
}

/**
 * 
 * @global type $conexion
 * @param type $frase
 * @param type $contexto
 * @return boolean
 */
function contenido_buscar_frase($frase, $contexto = "") {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);
    $contexto = sql_pone_barra_invertida($contexto);

    if (!$contexto) {
        $comando = "SELECT id FROM _contenido WHERE frase = '$frase' ";
    } else {
        $comando = "SELECT id FROM _contenido WHERE frase = '$frase' AND contexto = '$contexto'";
    }


    $sql = mysql_query("$comando  ", $conexion) or die("Problemas traductor_buscar_frase: " . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg['id']) {
        return $reg['id'];
    } else {
        return FALSE;
    }
}

/**
 * 
 * @global type $conexion
 * @param type $frase
 * @param type $contexto
 */
function contenido_registrar_frase($frase, $contexto = "") {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);
    $contexto = sql_pone_barra_invertida($contexto);

    if ($contexto) {
        $comando = "INSERT INTO _contenido (frase,contexto) VALUES ('$frase','$contexto') ";
    } else {
        $comando = "INSERT INTO _contenido (frase) VALUES ('$frase') ";
    }

    $sql = mysql_query("$comando  ", $conexion) or die("Error" . mysql_error());
}