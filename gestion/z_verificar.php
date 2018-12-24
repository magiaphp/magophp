<?php
//include "../admin/bd.php";
//include "../admin/coneccion.php";
if (isset($_SESSION['s_username'])) {
    $username = "$_SESSION[s_username]";    
    $sql = mysql_query("SELECT * "
            . "FROM _usuarios "
            . "WHERE usuario ='$username' ", $conexion) 
            
            or die ("<h1>Errores</h1> "
            . "<b>Carpeta:</b>: " . __DIR__ . "<br>"
            . "<b>Documento:</b>:" . __FILE__ . "<br>"
            . "<b>Linea:</b>:" . __LINE__ . "<br>"
            . "<b>Error SQL:</b>"
            . ":" . mysql_error() . "<br>");          
    $_usuarios = mysql_fetch_array($sql);   
    include "_usuarios/reg/reg.php";     
    
} else {
    header("Location: z_index.php");
    exit("<hr>");
}