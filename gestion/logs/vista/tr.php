<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
 echo '<td>' . $i . '</td> ';
 
foreach (_opciones_campos_a_mostrar_segun_tabla("logs") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$logs[$key]</td> ";
    }
}
// Lo que se quiera agregar solo sepone la final 
echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=logs&c=ver&logs_id='.$logs_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=logs&c=editar&logs_id='.$logs_id.'>'._tr("Editar").'</a>  
                      
                </td>';  