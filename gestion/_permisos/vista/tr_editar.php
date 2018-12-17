<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "_permisos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=_permisos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="_permisos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="_permisos_id" value="<?php echo $_permisos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="_permisos_grupo" value="<?php echo $_permisos_grupo; ?>" placeholder="<?php _t("Grupo"); ?>"></td> 
 <td><input class="form-control" type="text" name="_permisos_pagina" value="<?php echo $_permisos_pagina; ?>" placeholder="<?php _t("Pagina"); ?>"></td> 
 <td><input class="form-control" type="text" name="_permisos_permiso" value="<?php echo $_permisos_permiso; ?>" placeholder="<?php _t("Permiso"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 