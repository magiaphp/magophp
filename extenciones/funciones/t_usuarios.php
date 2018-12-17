<?php 
 /**  
 magia_version: 0.0.8 
 **/
 function t_usuarios_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM t_usuarios WHERE id = $id   ", $conexion) or die("Error: t_usuarios_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}function t_usuarios_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($t_usuarios = mysql_fetch_array($sql)) {
        //include "../gestion/t_usuarios/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $t_usuarios[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $t_usuarios[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$t_usuarios[$campo]\">$t_usuarios[$campo]</option> \n";
    }
}

function t_usuarios_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM t_usuarios  ",$conexion) or die ("Error:".mysql_error());
while ($t_usuarios = mysql_fetch_array($sql)) {
    
        include "../gestion/t_usuarios/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$t_usuarios[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$t_usuarios[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$t_usuarios[0]\">$t_usuarios[0]</option>";
   echo "value=\"$t_usuarios[0]\">$t_usuarios_t_usuarios</option>";
} 
}

function t_usuarios_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM t_usuarios   ", $conexion) or die("Error: t_usuarios_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}