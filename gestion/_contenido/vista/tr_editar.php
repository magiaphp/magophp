<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "_contenido", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=_contenido&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="_contenido">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="_contenido_id" value="<?php echo $_contenido_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="_contenido_frase" value="<?php echo $_contenido_frase; ?>" placeholder="<?php _t("Frase"); ?>"></td> 
 <td><input class="form-control" type="text" name="_contenido_contexto" value="<?php echo $_contenido_contexto; ?>" placeholder="<?php _t("Contexto"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 