<?php

/**
 * Limpia la cadena para registro en sql
 * @param type $cadena
 * @return type
 */
function sql_limpia_despues_reg($cadena) {

    $cadena = implode("", explode("\\", $cadena));

    $cadena = stripslashes(trim($cadena));

    return htmlspecialchars(stripslashes(trim($cadena)));
}

/**
 * 
 * @param type $frase
 * @return type
 */
function sql_quita_barra_invertida($frase) {
    return stripslashes($frase);
}

/**
 * 
 * @param type $frase
 * @return type
 */
function sql_pone_barra_invertida($frase) {
    return addslashes($frase);
}
