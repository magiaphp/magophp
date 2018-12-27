<?php

/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 * @package logs
 */
function logs_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM logs WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
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
 * @package logs
 * 
 */
function logs_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($logs = mysql_fetch_array($sql)) {
        //include "../gestion/logs/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $logs[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $logs[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$logs[$campo]\">$logs[$campo]</option> \n";
    }
}

/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 * @package logs
 */
function logs_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM logs  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($logs = mysql_fetch_array($sql)) {

        include "../gestion/logs/reg/reg.php";

        echo "<option ";
        if ($selecionado == $logs[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $logs[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$logs[0]\">$logs[0]</option>";
        echo "value=\"$logs[0]\">$logs_logs</option>";
    }
}

/**
 * Regresa el id max de la tabla logs
 * @global type $conexion 
 * @return boolean Si encuentra regrea el id maximo, sino regresa false
 * @package logs
 */
function logs_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM logs   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

/* * **************************************************************************** */
/* * **************************************************************************** */
/* * **************************************************************************** */
/* * **************************************************************************** */
/* * **************************************************************************** */

/**
 * Registra la actividad del sitio 
 * @global type $conexion
 * @global type $dbh
 * @param type $_usuarios_usuario
 * @param type $_usuarios_grupo
 * @param type $pagina
 * @param type $controlador
 * @param type $accion
 * @param type $variables
 * @param type $logs_argumento
 * @param boolean $logs_sospechoso
 */
function logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, $controlador, $accion, $variables, $logs_argumento, $logs_sospechoso) {
    global $conexion, $dbh;

    # ahora para el campo siguiente verificamos todo esto, y si hay algo sospechoso
    # lo registramos, sino pos nada
    // existe en la tabla contactos?
    // existe en la tabla _usuarios
    // esta activo?
    // existe el grupo
    // el usuario pertenece al grupo
    // ese grupo tiene permiso de esa accion
    // alguna otra anomalia
    // niveles de sospechas
    # 1 bajo (relacionados con el resto )
    # intentos de ingreso con claves incorrectas    
    # intentos de ingreso con usuarios inexistentes    
    # # 2 medio (relacionados con el admin)
    # Se crea un super admin
    # Me modifica parametros sensibles
    # clave incorrecta del admin
    # # 3 alto (relacionados con el root)
    # Se modifico la cuenta root
    # hay mas de un root
    # login con root no autorizado
    # Clave incorrecta del root    

    $logs_usuario = $_usuarios_usuario;
    $logs_grupo = $_usuarios_grupo;
    $logs_ip = $_SERVER["REMOTE_ADDR"];
    $logs_mac = "";
    $logs_p = $pagina;
    $logs_c = $controlador;
    $logs_a = $accion;
    $logs_comando = $variables;
    $logs_sospechoso = false;

    include "../gestion/logs/modelos/crear.php";
}

/**
 * Muestra el historico de la activiad del sistema
 * @global type $conexion
 * @param type $p
 * @param type $c
 * @param type $id
 */
function logs_historico($p, $c, $id) {

    global $conexion;
    /**
      if($id){
      $sql = mysql_query("SELECT fecha,usuario, a FROM logs WHERE p = '$p' AND argumento = '$id' ORDER BY fecha DESC ", $conexion) ;
      }else{
      $sql = mysql_query("SELECT fecha,usuario, a FROM logs WHERE p = '$p'  ORDER BY fecha DESC ", $conexion) ;
      }
     * 
     */
    switch ($c) {
        case "index":
            $sql = mysql_query("SELECT fecha,usuario, a, comando, argumento FROM logs WHERE p = '$p' AND argumento = '$id' ORDER BY fecha DESC ", $conexion);
            break;
        case "ver":
            $sql = mysql_query("SELECT fecha,usuario, a, comando, argumento FROM logs WHERE p = '$p' AND argumento = '$id' ORDER BY fecha DESC ", $conexion);
            break;
        case "editar":
            $sql = mysql_query("SELECT fecha,usuario, a, comando, argumento FROM logs WHERE p = '$p' AND argumento = '$id' ORDER BY fecha DESC ", $conexion);
            break;


        default:
            break;
    }
    echo '<h3>' . _tr("Historial") . '</h3>';
    echo '<table class="table" >';
    echo '    <theader>            
            <th>' . _tr("Usuario") . '</th>
            <th>' . _tr("Acción") . '</th>                        
            <th>' . _tr("Item") . '</th>                                    
            <th>' . _tr("Comando") . '</th>                        
            <th>' . _tr("Argumento") . '</th>                        
            <th>' . _tr("Fecha") . '</th>
        </theader>';
    while ($reg = mysql_fetch_row($sql)) {
        $usuario = contactos_campo_segun_email('contacto', $reg[1]);
        $a = $reg[2];
        $comando = $reg[3];
        $argumento = $reg[4];
        switch ($a) {
            case 'ver':
                $accion = _tr("Vio");
                break;
            case 'crear':
                $accion = _tr("Creo");
                break;
            case 'editar':
                $accion = _tr("Editó");
                break;
            case 'borrar':
                $accion = _tr("Borro");
                break;

            default:
                break;
        }
        echo "<tr>";
        echo "<td>$usuario</td>";
        echo "<td>$accion</td>";
        echo "<td>$id</td>";
        echo "<td><code>$ comando</code></td>";
        echo "<td>$argumento</td>";
        echo "<td>$reg[0]</td>";
        echo "</tr>";
    }
    echo "<table>";
}
