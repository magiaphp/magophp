<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_menu_ubicacion.'</td> 
 <td>'.$_menu_padre.'</td> 
 <td>'.$_menu_label.'</td> 
 <td>'.$_menu_url.'</td> 
 <td><span class="glyphicon glyphicon-'.$_menu_icono.'" aria-hidden="true"></span> </td> 
 <td>'.$_menu_orden.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_menu&c=ver&_menu_id='.$_menu_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_menu&c=editar&_menu_id='.$_menu_id.'>Editar</a>  
                      
                </td></tr>';  