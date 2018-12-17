<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "_paginas", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=_paginas&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="_paginas">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="_paginas_id" value="<?php echo $_paginas_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="_paginas_pagina" value="<?php echo $_paginas_pagina; ?>" placeholder="<?php _t("Pagina"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 