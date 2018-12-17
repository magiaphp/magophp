<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
    echo ' <tr>
    <td>'.$i.'</td> 
 <td><a href="index.php?p=_permisos&c=buscar&donde=grupo&busqueda='.$_permisos_grupo.'">'.$_permisos_grupo.'</a></td> 
 <td><a href="index.php?p=_permisos&c=buscar&donde=pagina&busqueda='.$_permisos_pagina.'">'.$_permisos_pagina.'</a></td> 
 <td><a href="index.php?p=_permisos&c=buscar&donde=permiso&busqueda='.$_permisos_permiso.'">'.$_permisos_permiso.'</a></td> 


 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_permisos&c=ver&_permisos_id='.$_permisos_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_permisos&c=editar&_permisos_id='.$_permisos_id.'>Editar</a>  
                      
                </td></tr>';  