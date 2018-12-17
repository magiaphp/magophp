<?php
/**
 * Hace un ECHO de la traduccion de la frase 
 * @global type $conexion
 * @global type $_usuarios_idioma El idioma que el usuario tiene defino
 * @global type $cfg_idioma El idioma por defecto configurado en el sistema
 * @param type $frase La frase que se desea traducir
 * @param type $contexto El $contexto en el cual esta $frase sera traducida
 * @param type $idioma El idioma al cual se traducira la $frase
 * @return type Regresa la frase traducida
 */
function _t($frase, $contexto = "", $idioma = "") {
    global $conexion, $_usuarios_idioma, $cfg_idioma;

    // si el contacto no tiene definido idioma 
    $idioma = ($_usuarios_idioma) ? $_usuarios_idioma : $cfg_idioma;

    $frase = _tr($frase, $contexto);

    echo "$frase";
    // echo "--";
}
/**
 * Hace un retorno para asignarla a un variable de la traduccion 
 * @global type $conexion
 * @global type $_usuarios_idioma Idioma del usuario
 * @global type $cfg_idioma Idioma por defecto del sistema 
 * @param type $frase Frase a ser traducida
 * @param type $contexto Contexto en la cual la traduccion sera traducida
 * @param type $idioma Idioma al cual se traducira 
 * @return type Valor a ser asignado a una variable
 */
function _tr($frase, $contexto = "", $idioma = '') {

    global $conexion, $_usuarios_idioma, $cfg_idioma;

    // si el contacto no tiene definido idioma 
    $idioma = ($_usuarios_idioma) ? $_usuarios_idioma : $cfg_idioma;


    /*
     * 1) Busco si la frase esta registrada en la base de datos
     * 2) Si no esta, la registro
     * 3) Busco si tiene una traduccion 
     * 4)      
     */


    if (isset($frase) && !contenido_existe_frase_en_contenido($frase, $contexto = "")) {

        contenido_registrar_frase($frase, $contexto = "");
    }


    if (!traductor_buscar_traduccion($frase, $idioma)) {
        /**
         * Si no hay traducion y el idioma del usuario es es_ES
         * Registro exactamente la misma frase como traduccion
         */
        if ($idioma == 'es_ES') {
            traductor_registrar_traduccion($frase, $idioma, $frase);
        } else {
            /**
             * Sino, pongo tres lineas como traduccion
             */
            traductor_registrar_traduccion($frase, $idioma, '---');
        }
    }


    /**
     * Regreso la traduccion 
     */
    return traductor_buscar_traduccion($frase, $idioma);
}
/**
 * Busca si una frase tiene traduccion en la base de datos
 * @todo Limpeza de la frase entrante
 * @global type $conexion
 * @param type $frase Frase a buscar si tiene traduccion
 * @param type $idioma Idioma en el cual buscamos
 * @return boolean Devuelve la traduccion si la hay o devuelve falso si no halla 
 */
function traductor_buscar_traduccion($frase, $idioma) {
    global $conexion;
    /**
     * Limpiamos la frase 
     */
    $frase = sql_pone_barra_invertida($frase);

    $comando = "SELECT traduccion FROM _traducciones WHERE frase = '$frase' AND idioma = '$idioma'  ";
    
    $sql = mysql_query("$comando  ", $conexion) or die("Problemas traductor_buscar_traduccion: " . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return FALSE;
    }
}

/**
 * Registro la traduccion de una frase
 * @global type $conexion
 * @param type $frase Frase original 
 * @param type $idioma Idioma a ser traducido
 * @param type $traduccion Traduccion de la $frase 
 * @return type 0 No regresa nada esta funcion 
 */
function traductor_registrar_traduccion($frase, $idioma, $traduccion) {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);
    $traduccion = sql_pone_barra_invertida($traduccion);


    $sql = mysql_query(""
            . "INSERT INTO _traducciones "
            . "(frase, idioma, traduccion) "
            . "VALUES ('$frase','$idioma','$traduccion')  ", $conexion) or die("Error" . mysql_error());

    return 0;
}

/**
 * Esto es para actualizar la traduccion existente
 * @todo Si viene con id la frase no haria falta el idioma, solo la traduccion, ver como mejorar
 * @global type $conexion
 * @param type $id_frase Identificador de la frase 
 * @param type $idioma Idioma a ser traducido
 * @param type $traduccion Traduccion a ser actualzada
 */
function traductor_actualiza_traduccion($id_frase, $idioma, $traduccion) {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);
    $traduccion = sql_pone_barra_invertida($traduccion);



    $sql = mysql_query("UPDATE traducciones SET traduccion = '$traduccion' WHERE id_frase = $id_frase AND idioma = '$idioma'  ", $conexion) or die(" traductor_actualiza_traduccion() " . mysql_error());
}
