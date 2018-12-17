<?php
/**
 * muestra un mensaje 
 * @param type $tipo [atencion, ayuda, alto, info, ok] por defecto es info
 * @param type $sms Texto a ser enviado como mensaje
 */
// atencion	//	ayuda//	alto//	info//	ok
function mensaje($tipo, $sms) {

    $tipo = strtolower($tipo); // pasamos todo a minusculas

    $atencion = _tr("Atención");
    $ayuda = _tr("Ayuda");
    $alto = _tr("Alto");
    $info = _tr("Info");
    $ok = _tr("Ok");
    $msj = _tr("$sms");

    switch ($tipo) {
        case "atencion" :
        case "atención" :
            echo "<div class=\"alert alert-warning\" role=\"alert\">";
            echo "<span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
            echo "$atencion: $msj</div>";
            break;

        case "ayuda" :
            echo "<div class=\"alert alert-info\" role=\"alert\">";
            echo "<span class=\"glyphicon glyphicon-question-sign\"></span> ";
            echo "$ayuda: $msj</div>";
            break;

        case "alto" :
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo "<span class=\"glyphicon glyphicon-warning-sign\"></span> ";
            echo "$alto: $msj</div>";
            break;

        case "info" :
            echo "<div class=\"alert alert-info\" role=\"alert\">";
            echo "<span class=\"glyphicon glyphicon-lamp\"></span> ";
            echo "$info: $msj</div>";
            break;

        case "ok" :
            echo "<div class=\"alert alert-success\" role=\"alert\">";
            echo "<span class=\"glyphicon glyphicon-ok-sign\"></span> ";
            echo "$ok: $msj</div>";
            break;

        default:
            echo "<div class=\"alert alert-info\" role=\"alert\">";
            //echo "<span class=\"glyphicon glyphicon-lamp\"></span> "; 
            echo "-- $msj -- </div>";
            break;
    }
}
/**
 * Es un mensaje de Alto conel texto dado
 * @param type $sms Mensaje a ser mostrado
 */
function sms($sms) {
    mensaje('alto', $sms);
}