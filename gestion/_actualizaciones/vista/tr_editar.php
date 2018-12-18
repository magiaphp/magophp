<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "_actualizaciones", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=_actualizaciones&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="_actualizaciones">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="_actualizaciones_id" value="<?php echo $_actualizaciones_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="_actualizaciones_version" value="<?php echo $_actualizaciones_version; ?>" placeholder="<?php _t("Version"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_requiere" value="<?php echo $_actualizaciones_requiere; ?>" placeholder="<?php _t("Requiere"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_nombre" value="<?php echo $_actualizaciones_nombre; ?>" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_descripcion" value="<?php echo $_actualizaciones_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_ejecutar" value="<?php echo $_actualizaciones_ejecutar; ?>" placeholder="<?php _t("Ejecutar"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_estatus" value="<?php echo $_actualizaciones_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 