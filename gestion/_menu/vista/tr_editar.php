<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "_menu", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=_menu&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="_menu">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="_menu_id" value="<?php echo $_menu_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="_menu_ubicacion" value="<?php echo $_menu_ubicacion; ?>" placeholder="<?php _t("Ubicacion"); ?>"></td> 
 <td><input class="form-control" type="text" name="_menu_padre" value="<?php echo $_menu_padre; ?>" placeholder="<?php _t("Padre"); ?>"></td> 
 <td><input class="form-control" type="text" name="_menu_label" value="<?php echo $_menu_label; ?>" placeholder="<?php _t("Label"); ?>"></td> 
 <td><input class="form-control" type="text" name="_menu_url" value="<?php echo $_menu_url; ?>" placeholder="<?php _t("Url"); ?>"></td> 
 <td><input class="form-control" type="text" name="_menu_icono" value="<?php echo $_menu_icono; ?>" placeholder="<?php _t("Icono"); ?>"></td> 
 <td><input class="form-control" type="text" name="_menu_orden" value="<?php echo $_menu_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 