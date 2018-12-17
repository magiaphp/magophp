<?php

/**
 * regresa la fecha un dia antes de hoy
 * @formato aa-mm-dd
 * @return type
 */
function ayer() {
    $a = date("Y");
    $m = date("m");
    $d = date("d") - 1;
    $ayer = "$a-$m-$d";
    return $ayer;
}

//=======================
function hoy() {
    $a = date("Y");
    $m = date("m");
    $d = date("d");
    $hoy = "$a-$m-$d";
    return $hoy;
}

//=======================
function manana() {
    $a = date("Y");
    $m = date("m");
    $d = date("d") + 1;
    $m = "$a-$m-$d";
    return $m;
}

//=======================
function mes_prox() {
    $a = date("Y");
    $m = date("m") + 1;
    $d = date("d");
    $mp = "$a-$m-$d";
    return $mp;
}

//=======================
function mes_ant() {
    $a = date("Y");
    $m = date("m") - 1;
    $d = date("d");
    $ma = "$a-$m-$d";
    return $ma;
}

//=======================
function ano_prox() {
    $a = date("Y") + 1;
    $m = date("m");
    $d = date("d");
    $ap = "$a-$m-$d";
    return $ap;
}

//=======================
function ano_ant() {
    $a = date("Y") - 1;
    $m = date("m");
    $d = date("d");
    $aa = "$a-$m-$d";
    return $aa;
}

function dia_segun_fecha($fecha, $extra = "") {
    $f = strtotime($fecha);
    $a = date("Y", $f); // Year (2003)
    $m = date("m", $f); // Month (12)
    $d = date("d", $f); // day (14)
    $dia = date("N", mktime(0, 0, 0, $m, $d + $extra, $a));
    switch ($dia) {
        case "1" :
            echo "Lunes";
            break;

        case "2" :
            echo "Martes";
            break;

        case "3" :
            echo "Miercoles";
            break;

        case "4" :
            echo "Jueves";
            break;

        case "5" :
            echo "Viernes";
            break;

        case "6" :
            echo "S&aacute;bado";
            break;

        case "7" :
            echo "Domingo";
            break;
    }
}

//============Sumar dias a una fecha =========================
function sumar_dias($fecha, $extra = "") {
    $f = strtotime($fecha);
    $a = date("Y", $f); // Year (2003)
    $m = date("m", $f); // Month (12)
    $d = date("d", $f); // day (14)

    $nfecha = date("Y-m-d", mktime(0, 0, 0, $m, $d + $extra, $a));

    return "$nfecha";
}

// saca el numero de dia (de 1 para lunes .. 7 para domingo) de lunes a viernes segun la fecha 
//==================================
function n_dia_segun_fecha($fecha) {
    $f = strtotime($fecha);
    $a = date("Y", $f); // Year (2003)
    $m = date("m", $f); // Month (12)
    $d = date("d", $f); // day (14)
    $dia = date("N", mktime(0, 0, 0, $m, $d, $a));
    return "$dia";
}

//  saca el numero del mes 1, al 12
//==================================
function n_mes_fecha($fecha) {
    $f = strtotime($fecha);
    $a = date("Y", $f); // Year (2003)
    $m = date("m", $f); // Month (12)
    $d = date("d", $f); // day (14)

    $mes = date("n", mktime(0, 0, 0, $m, $d, $a));

    return "$mes";
}

/**
 * 
 * @param type $fecha
 * @return type
 */

function fecha_larga($fecha) {
    $f = strtotime($fecha);
    $a = date("Y", $f); // Year (2003)
    $m = date("m", $f); // Month (12)
    $d = date("d", $f); // day (14)
    $dia = date("w", mktime(0, 0, 0, $m, $d, $a));
    $mes = date("n", mktime(0, 0, 0, $m, $d, $a));
    $mes = $mes - 1;
    $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "S&aacute;bado");
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    return " $dias[$dia], $d de $meses[$mes] del $a";
//echo $dias[$dia].", ".$dia." de ".$meses[$mes-1]. " del ".$a ;
//Salida: Viernes 24 de Febrero del 2012
}

//==================================
function fecha_corta($fecha) {

    $f = strtotime($fecha);
    $a = date("Y", $f); // Year (2003)
    $m = date("m", $f); // Month (12)

    $d = date("d", $f); // day (14)

    $dia = date("w", mktime(0, 0, 0, $m, $d, $a));
    $mes = date("n", mktime(0, 0, 0, $m, $d, $a));
    $mes = $mes - 1;

    $dias = array("Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab");
    $meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");


    return "$dias[$dia] $d $meses[$mes]";


//echo $dias[$dia].", ".$dia." de ".$meses[$mes-1]. " del ".$a ;
//Salida: Viernes 24 de Febrero del 2012
}

//==================================
function mes_largo($mes) {
    $mes = $mes - 1;
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    echo " $meses[$mes] ";
}

//====================================
function mes_corto($mes) {
    $mes = $mes - 1;
    $meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
    echo " $meses[$mes] ";
}

/**
 * 
 */
function ano_add($as) {
    $hoy = date("Y") + 1;
    for ($a = 1900; $a < $hoy; $a++) {

        if ($as == $a) {
            $selected = "selected";
        } else {
            $selected = "";
        }

        echo "<option value=\"$a\" $selected >$a</option>";
    }
}

?>
