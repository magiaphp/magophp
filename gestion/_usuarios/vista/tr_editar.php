<?php
/**
  magia_version: 0.0.8
 * */
$borrar = (permisos_tiene_permiso("borrar", "_usuarios", $z_usuarios_grupo)) ? '<a class="btn btn-danger" href="index.php?p=_usuarios&c=borrar&a=borrar&id=' . $id . '">Borrar</a>' : '';
?>
<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_usuarios">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="_usuarios_id" value="<?php echo $z_usuarios_id; ?>">    
    <tr> 
        <td><input class="form-control" type="text" name="_usuarios_grupo" value="<?php echo $z_usuarios_grupo; ?>" placeholder="<?php _t("Grupo"); ?>"></td> 
        <td><input class="form-control" type="text" name="_usuarios_usuario" value="<?php echo $z_usuarios_usuario; ?>" placeholder="<?php _t("Usuario"); ?>"></td> 
        <td><input class="form-control" type="text" name="_usuarios_clave" value="<?php echo $z_usuarios_clave; ?>" placeholder="<?php _t("Clave"); ?>"></td> 
        <td><input class="form-control" type="text" name="_usuarios_estatus" value="<?php echo $z_usuarios_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
            <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 