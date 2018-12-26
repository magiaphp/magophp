<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
 echo '<td>' . $i . '</td> ';  

foreach (_opciones_campos_a_mostrar_segun_tabla("cambio_claves") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$cambio_claves[$key]</td> ";
    }
}
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=cambio_claves&c=ver&cambio_claves_id='.$cambio_claves_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=cambio_claves&c=editar&cambio_claves_id='.$cambio_claves_id.'>'._tr("Editar").'</a>  
                      
                </td>';  