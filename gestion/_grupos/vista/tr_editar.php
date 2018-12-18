<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "_grupos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=_grupos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="_grupos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="_grupos_id" value="<?php echo $_grupos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="_grupos_grupo" value="<?php echo $_grupos_grupo; ?>" placeholder="<?php _t("Grupo"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 