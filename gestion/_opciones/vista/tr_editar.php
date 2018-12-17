<?php
/**
  magia_version: 0.0.8
 * */
$borrar = (permisos_tiene_permiso("borrar", "_opciones", $_usuarios_grupo)) ? '<a class="btn btn-danger" href="index.php?p=_opciones&c=borrar&a=borrar&id=' . $_opciones_id . '">Borrar</a>' : '';
?>
<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_opciones">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="_opciones_id" value="<?php echo $_opciones_id; ?>">    
    <tr> 
        <td><?php echo $i; ?></td> 
        <td><?php echo $_opciones_id; ?></td> 
        <td><input class="form-control" type="text" name="_opciones_opcion" value="<?php echo $_opciones_opcion; ?>" placeholder="<?php _t("Opcion"); ?>" readonly=""></td> 
        <td><input class="form-control" type="text" name="_opciones_valor" value="<?php echo $_opciones_valor; ?>" placeholder="<?php _t("Valor"); ?>"></td> 
        <td><input class="form-control" type="text" name="_opciones_grupo" value="<?php echo $_opciones_grupo; ?>" placeholder="<?php _t("Grupo"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
            <?php //echo $borrar; ?>
        </td>        
    </tr>
</form> 