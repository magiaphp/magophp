<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_permisos">
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="crear">    
    <tr> 
        <td></td> 
        <td>
            <select class="form-control" name="_permisos_grupo" readonly>
                <?php _grupos_add($busqueda); ?>
            </select>

        </td> 
        <td>
            <select class="form-control" name="_permisos_pagina">
                <?php 
                //$paginas_a_excluir = array();
                $paginas_a_excluir = _permisos_paginas_segun_grupo($busqueda);
                _paginas_add("$busqueda",$paginas_a_excluir); ?>
            </select>
            </td> 
        <td>
            <label for="ver" class="col-sm-2 control-label"><?php _t("Ver"); ?><br>
                <input type="checkbox" name="ver" value="1">
            </label> 
            
            <label for="crear" class="col-sm-2 control-label"><?php _t("Crear"); ?><br>
                <input type="checkbox" name="crear" value="1">
            </label> 
            
            <label for="editar" class="col-sm-2 control-label"><?php _t("Editar"); ?><br>
                <input type="checkbox" name="editar" value="1">
            </label> 
            
            <label for="borrar" class="col-sm-2 control-label"><?php _t("Borrar"); ?><br>
                <input type="checkbox" name="borrar" value="1">
            </label> 
            
            
            
            
            
            </td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 