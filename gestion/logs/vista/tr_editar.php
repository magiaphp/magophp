<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "logs", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=logs&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="logs">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="logs_id" value="<?php echo $logs_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="logs_fecha" value="<?php echo $logs_fecha; ?>" placeholder="<?php _t("Fecha"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_usuario" value="<?php echo $logs_usuario; ?>" placeholder="<?php _t("Usuario"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_grupo" value="<?php echo $logs_grupo; ?>" placeholder="<?php _t("Grupo"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_ip" value="<?php echo $logs_ip; ?>" placeholder="<?php _t("Ip"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_mac" value="<?php echo $logs_mac; ?>" placeholder="<?php _t("Mac"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_p" value="<?php echo $logs_p; ?>" placeholder="<?php _t("P"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_c" value="<?php echo $logs_c; ?>" placeholder="<?php _t("C"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_a" value="<?php echo $logs_a; ?>" placeholder="<?php _t("A"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_comando" value="<?php echo $logs_comando; ?>" placeholder="<?php _t("Comando"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_argumento" value="<?php echo $logs_argumento; ?>" placeholder="<?php _t("Argumento"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_sospechoso" value="<?php echo $logs_sospechoso; ?>" placeholder="<?php _t("Sospechoso"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 