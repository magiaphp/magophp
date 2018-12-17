<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Cambiar clave"); ?></h2> 

</h2> 




<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="_usuarios"> 
    <input type="hidden" name="c" value="cambiar_clave"> 
    <input type="hidden" name="a" value="cambiar_clave"> 






    <div class="form-group"> 
        <label for="xx" class="col-sm-2 control-label"><?php _t("Usuario"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" 
                   class="form-control" 
                   name="xx" 
                   id="xx" 
                   placeholder="" 
                   value="<?php echo $_usuarios_usuario; ?>"  
                   readonly=""> 
        </div> 
    </div> 



    

    <div class="form-group"> 
        <label for="t_usuarios_clave_nueva" class="col-sm-2 control-label"><?php _t("Nueva clave"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" 
                   class="form-control" 
                   name="t_usuarios_clave_nueva" 
                   id="t_usuarios_clave_nueva" 
                   placeholder="<?php _t("Letras, números, signos [&é#§çà, etc]"); ?>" 
                   value=""   
                   required=""> 
        </div> 
    </div> 

    
    
    <div class="form-group"> 
        <label for="t_usuarios_clave_repita" class="col-sm-2 control-label"><?php _t("Repita"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" 
                   class="form-control" 
                   name="t_usuarios_clave_repita" 
                   id="t_usuarios_clave_repita" 
                   placeholder="<?php _t("Repita aca la nueva clave"); ?>" 
                   value=""  
                   required=""> 
        </div> 
    </div> 
    
    
    
    <div class="form-group"> 
        <label for="t_usuarios_clave_repita" class="col-sm-2 control-label"></label> 
        <div class="col-sm-10"> 
            <p><?php _t('Una vez la clave cambiada, tendra que volver a conectarse con la nueva clave.'); ?></p>
        </div> 
    </div> 
    
    


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 
