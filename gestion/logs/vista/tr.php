<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, logs_campos_a_mostrar())) {
                                echo "<td>$logs[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=logs&c=ver&logs_id='.$logs_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=logs&c=editar&logs_id='.$logs_id.'>'._tr("Editar").'</a>  
                      
                </td>';  