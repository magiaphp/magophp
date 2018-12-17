<?php /**
  magia_version: 0.0.8
 * */ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

    <h2><?php _t("Buscar"); ?></h2> 

    <form class="" action="index.php" method="get"> 
        <input type="hidden" name="p" value="_usuarios"> 
        <input type="hidden" name="c" value="buscar"> 
        <div class="form-group"> 
            <label for="t_usuarios_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
            <input type="text" class="form-control" name="t_usuarios_grupo" id="t_usuarios_grupo" placeholder="<?php _t("Grupo"); ?> "> 
        </div> 


        <div class="form-group"> 
            <label for="t_usuarios_usuario" class="col-sm-2 control-label"><?php _t("Usuario"); ?></label> 
            <input type="text" class="form-control" name="t_usuarios_usuario" id="t_usuarios_usuario" placeholder="<?php _t("Usuario"); ?> "> 
        </div> 


        <div class="form-group"> 
            <label for="t_usuarios_clave" class="col-sm-2 control-label"><?php _t("Clave"); ?></label> 
            <input type="text" class="form-control" name="t_usuarios_clave" id="t_usuarios_clave" placeholder="<?php _t("Clave"); ?> "> 
        </div> 


        <div class="form-group"> 
            <label for="t_usuarios_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
            <input type="text" class="form-control" name="t_usuarios_estatus" id="t_usuarios_estatus" placeholder="<?php _t("Estatus"); ?> "> 
        </div> 


        <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
    </form> 
</div> 
