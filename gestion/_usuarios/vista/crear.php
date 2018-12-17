<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Nuevo usuario en el sistema"); ?></h2> 

</h2> 





<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="_usuarios"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 



    <div class="form-group"> 
        <label for="t_usuarios_usuario" class="col-sm-2 control-label"><?php _t("Contactos sin usuario"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="t_usuarios_usuario" >
                <?php contacto_sin_usuario_add(); ?>
            </select>
        </div> 
    </div> 

    
    
    <div class="form-group"> 
        <label for="t_usuarios_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="t_usuarios_grupo" >
                <?php _grupos_add("", "root"); ?>
            </select>
            <?php
            /* <input type="text" class="form-control" name="t_usuarios_grupo" id="t_usuarios_grupo" placeholder="<?php _t("Grupo"); ?>" value=""   > */
            ?>
        </div> 
    </div> 



    <div class="form-group"> 
        <label for="t_usuarios_clave" class="col-sm-2 control-label"><?php _t("Clave"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="t_usuarios_clave" 
                id="t_usuarios_clave" 
                placeholder="<?php _t("Clave"); ?>" value="<?php echo genera_clave(); ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="t_usuarios_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <div class="radio">
                <label>
                    <input  type="radio" name="t_usuarios_estatus" value="1" >
                    <?php _t("Activo"); ?> 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input  type="radio" name="t_usuarios_estatus" value="0"  checked >
                    <?php _t("Bloqueado"); ?>  
                </label>
            </div>
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 
