<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "actualizaciones", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=actualizaciones&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="actualizaciones">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="actualizaciones_id" value="<?php echo $actualizaciones_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="actualizaciones_codigo" value="<?php echo $actualizaciones_codigo; ?>" placeholder="<?php _t("Codigo"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_requiere" value="<?php echo $actualizaciones_requiere; ?>" placeholder="<?php _t("Requiere"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_nombre" value="<?php echo $actualizaciones_nombre; ?>" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_descripcion" value="<?php echo $actualizaciones_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_ejecutar" value="<?php echo $actualizaciones_ejecutar; ?>" placeholder="<?php _t("Ejecutar"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_estatus" value="<?php echo $actualizaciones_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 