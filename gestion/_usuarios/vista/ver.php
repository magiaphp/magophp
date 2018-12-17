<?php /**
  magia_version: 0.0.8
 * */ ?>
<h1> 
    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Detalles"); ?> 
</h1> 


<form class="form-horizontal" method="" action=""> 
    <input type="hidden" name="p" value="_usuarios"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="t_usuarios_id" value="<?php echo $t_usuarios_id; ?>"> 
    
    
    


    <div class="form-group"> 
        <label for="t_usuarios_usuario" class="col-sm-2 control-label"><?php _t("Usuario"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="t_usuarios_usuario" id="t_usuarios_usuario" placeholder="<?php _t("Usuario"); ?>" value="<?php echo $t_usuarios_usuario; ?>"  disabled > 
        </div> 
    </div> 

        <div class="form-group"> 
        <label for="t_usuarios_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="t_usuarios_grupo" id="t_usuarios_grupo" placeholder="<?php _t("Grupo"); ?>" value="<?php echo $t_usuarios_grupo; ?>"  disabled > 
        </div> 
    </div> 


<?php /*    <div class="form-group"> 
        <label for="t_usuarios_clave" class="col-sm-2 control-label"><?php _t("Clave"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="t_usuarios_clave" id="t_usuarios_clave" placeholder="<?php _t("Clave"); ?>" value="***********"  disabled > 
        </div> 
    </div> 

*/?>
    <div class="form-group"> 
        <label for="t_usuarios_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <div class="radio">
                <label>
                    <input disabled type="radio" name="t_usuarios_estatus" value="1" <?php echo "$t_usuarios_estatus_1"; ?>  >
                    <?php _t("Activo"); ?> 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input disabled type="radio" name="t_usuarios_estatus" value="0"  <?php echo "$t_usuarios_estatus_0"; ?>  >
                    <?php _t("Bloqueado"); ?>  
                </label>
            </div>
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
        </div> 
    </div>     
</form> 
<a href="index.php?p=_usuarios&c=txt&_usuarios_id=<?php echo $t_usuarios_id; ?>">Formato texto</a> 
