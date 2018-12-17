<?php

/**
 * Nos da la versión actual de Magia_PHP
 * @return string Valor de 3 numeros separados por puntos ejemplo: 0.8.1
 * @example path description
 * <pre><code>
  function magia_version(){
  return "0.0.8";
  }
 * </code></pre>
 */
function magia_version() {
    return "0.0.11";
}

function m($v1, $v2) {
    return ($v1 == $v2) ? TRUE : FALSE;
}

function x() {
    global $r1, $r2;
    return($r1 != $r2) ? die(sms(EL)) : false;
}

/**
 * Nos da el valor segun $tabla, $id, $campo
 * @global type $conexion
 * @param type $tabla Tabla de la cual se desea la información
 * @param type $id Identificador de registro
 * @param type $campo Nombre del campo del registro
 * @return type Resultado obtenido
 */
function _campo($tabla, $id, $campo) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla WHERE id = '$id'   ", $conexion) or die("Error:" . mysql_error());
    $reg = mysql_fetch_array($sql);
    return $reg[$campo];
}

/**
 * Incluye las funciones creadas para cada tabla
 */
function _incluir_funciones() {
    
    $ruta = "../extenciones/funciones/";
    $directorio = scandir($ruta); //ruta actual
    $i = 2; // empiezo en el segundo fichero  
    while ($i < count($directorio)) {
        include ($ruta . $directorio[$i]);
        $i++;
    }
}

/**
 * 
 * @param type $ruta
 * @return type
 */
function _listar_directorios_ruta($ruta = "./") {
    // abrir un directorio y listarlo recursivo 
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            $carpetas = [];
            while (($file = readdir($dh)) !== false) {
                //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
                //mostraría tanto archivos como directorios 
                //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
                if (is_dir($ruta . $file) && $file != "." && $file != "..") {

                    //solo si el archivo es un directorio, distinto que "." y ".." 

                    $c = array_push($carpetas, $file);


                    //  echo "<br>Directorio: $ruta$file"; 
                    // _listar_directorios_ruta($ruta . $file . "/"); 
                }
            }
            closedir($dh);
        }
    } else {
        echo "<br>No es ruta valida";
    }
    return $c;
}

/**
 * Entrega una lista de ficheros que tiene una capeta
 * @param type $ruta de la carpeta
 * @return type Devuelve un array() con los ficheros contenidos en la carpeta
 */
function _listar_ficheros_de_carpeta($ruta = '.') {
    $directorio = opendir($ruta); //ruta actual

    $ficheros = [];

    while ($archivo = readdir($directorio)) { //obtenemos un archivo y luego otro sucesivamente
        if (is_dir($archivo)) {//verificamos si es o no un directorio
            //echo "[" . $archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes            
            $r = array_push($ficheros, $archivo);
        }
    }

    return $r;
}

/**
 * Genera el menu para el sistema
 * @param type $selecionado
 */
function _magia_menu($selecionado) {
    $menu_items = _listar_directorios_ruta();
    $menu_total_items = count(_listar_directorios_ruta());
    $i = 0;
    while ($i < $menu_total_items) {

        $activa = ($selecionado == $menu_items[$i] ) ? 'active' : 0;
        if ($activa) {
            $clase = ' glyphicon glyphicon-folder-open ';
        } else {
            $clase = ' glyphicon glyphicon-folder-close ';
        }

        if ($menu_items[$i] != 'home') {
            echo '<li class="' . $activa . '"><a href="?p=' . $menu_items[$i] . '&c=index"> <span class="' . $clase . '"></span> ' . ucwords($menu_items[$i]) . '</a></li>';
        }
        $i++;
    }
}

/**
 * Estatus Activo / Bloquado
 * @param type $estatus
 * @return type
 */
function _estatus($estatus) {
    if ($estatus == 0) {
        return _t("Activo");
    } else {
        return _t("Bloqueado");
    }
}

function genera_clave() {
    //Se define una cadena de caractares. Te recomiendo que uses esta.
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    //Obtenemos la longitud de la cadena de caracteres
    $longitudCadena = strlen($cadena);

    //Se define la variable que va a contener la contraseña
    $pass = "";
    //Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
    $longitudPass = 10;

    //Creamos la contraseña
    for ($i = 1; $i <= $longitudPass; $i++) {
        //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
        $pos = rand(0, $longitudCadena - 1);

        //Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
        $pass .= substr($cadena, $pos, 1);
    }
    return $pass;
}

/**
 * Regresa la clave codificada
 */
function codifica_clave($clave) {
    //http://php.net/manual/es/function.password-hash.php
    $opciones = [
        'cost' => 12,
    ];

    return password_hash($clave, PASSWORD_BCRYPT, $opciones);
}

function vardump($codigo, $notas = "") {
    global $config_debug;


    $i = 1;

    if ($config_debug) {

        foreach ($notas as $value) {

            switch ($i) {
                case 1:
                    echo "<h$i>$value</h$i>";
                    break;
                case 2:
                    echo "<p style=\"color:red;\">$value</p>";
                    break;


                default:
                    echo "<p>$value</p>";
                    break;
            }




            $i++;
        }
        echo "<pre><code>";
        echo var_dump($codigo);
        echo "</pre></code>";
    }
}

function logo() {
    global $config_logo;
    echo '<a href="index.php" class="thumbnail"><img src="../imagenes/' . $config_logo . '" alt=""></a>';
}

/**
 * Enlaces para ordenar una tabla
 * @param type $url
 * @param type $label
 * @param type $ordenpor
 * @param type $orden
 */
function ordenpor($url, $label, $ordenpor, $orden){
    
    $icono_arriba   = '<span class="glyphicon glyphicon-chevron-up"></span>'; 
    $icono_abajo    = '<span class="glyphicon glyphicon-chevron-down"></span>'; 
    
    if($orden == 'ASC'){
        $enlace = '<a href="'.$url.'&ordenpor='.$ordenpor.'&orden=DESC">'.$label.' '.$icono_abajo.' </a>';
        
    }else{
        $enlace = '<a href="'.$url.'&ordenpor='.$ordenpor.'&orden=ASC">'.$icono_arriba.' '.$label.'  </a>';
    }
    
    echo $enlace; 
    
}