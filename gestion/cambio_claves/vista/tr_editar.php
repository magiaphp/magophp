<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "cambio_claves", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=cambio_claves&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="cambio_claves">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="cambio_claves_id" value="<?php echo $cambio_claves_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="cambio_claves_usuario" value="<?php echo $cambio_claves_usuario; ?>" placeholder="<?php _t("Usuario"); ?>"></td> 
 <td><input class="form-control" type="text" name="cambio_claves_codigo" value="<?php echo $cambio_claves_codigo; ?>" placeholder="<?php _t("Codigo"); ?>"></td> 
 <td><input class="form-control" type="text" name="cambio_claves_fecha_solicitud" value="<?php echo $cambio_claves_fecha_solicitud; ?>" placeholder="<?php _t("Fecha_solicitud"); ?>"></td> 
 <td><input class="form-control" type="text" name="cambio_claves_codigo_usado" value="<?php echo $cambio_claves_codigo_usado; ?>" placeholder="<?php _t("Codigo_usado"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 