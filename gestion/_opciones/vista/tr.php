<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, _opciones_campos_a_mostrar())) {
                                echo "<td>$_opciones[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=_opciones&c=ver&_opciones_id='.$_opciones_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_opciones&c=editar&_opciones_id='.$_opciones_id.'>'._tr("Editar").'</a>  
                      
                </td>';  