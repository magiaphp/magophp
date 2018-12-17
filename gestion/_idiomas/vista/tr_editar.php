<?php
/**
  magia_version: 0.0.8
 * */
$borrar = (permisos_tiene_permiso("borrar", "_idiomas", $_usuarios_grupo)) ? '<a class="btn btn-danger" href="index.php?p=_idiomas&c=borrar&a=borrar&id=' . $id . '">Borrar</a>' : '';
?>
<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_idiomas">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="_idiomas_id" value="<?php echo $_idiomas_id; ?>">    
    <tr> 
        <td></td> 
        <td><input class="form-control" type="text" name="_idiomas_idioma" value="<?php echo $_idiomas_idioma; ?>" placeholder="<?php _t("Idioma"); ?>"></td> 
        <td><input class="form-control" type="text" name="_idiomas_nombre" value="<?php echo $_idiomas_nombre; ?>" placeholder="<?php _t("Nombre"); ?>"></td> 
        <td><input class="form-control" type="number" name="_idiomas_orden" value="<?php echo $_idiomas_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
            <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 