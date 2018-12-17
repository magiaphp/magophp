<?php 
 /**  
 magia_version: 0.0.8 
 **/
 function actualizaciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM actualizaciones WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function actualizaciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($actualizaciones = mysql_fetch_array($sql)) {
        //include "../gestion/actualizaciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $actualizaciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $actualizaciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$actualizaciones[$campo]\">$actualizaciones[$campo]</option> \n";
    }
}

function actualizaciones_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM actualizaciones  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($actualizaciones = mysql_fetch_array($sql)) {
    
        include "../gestion/actualizaciones/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$actualizaciones[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$actualizaciones[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$actualizaciones[0]\">$actualizaciones[0]</option>";
   echo "value=\"$actualizaciones[0]\">$actualizaciones_actualizaciones</option>";
} 
}
/**/
function actualizaciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM actualizaciones   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function actualizaciones_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM actualizaciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }
    
    return $data;
}
/**
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 */
function actualizaciones_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'actualizaciones_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function actualizaciones_thead(){    
    $campo_disponibles = actualizaciones_campos_disponibles();   
    $actualizaciones_campos_a_mostrar = actualizaciones_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $actualizaciones_campos_a_mostrar)){
            echo "<th>"._tr($value)."</th> "; 
        }        
    }
    echo "<th>"._tr("Acción")."</th> "; // accion             
    echo "    </tr>
    </thead>"; 
}
/**
 * 
 */
function actualizaciones_tfoot(){    
   actualizaciones_thead();
}


