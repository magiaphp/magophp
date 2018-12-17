<?php /**
  magia_version: 0.0.8
 * */ ?>
<h1> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Detalles"); ?> 
</h1> 

<form class="form-horizontal" method="" action=""> 
    <input type="hidden" name="p" value="_opciones"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="_opciones_id" value="<?php echo $_opciones_id; ?>"> 
    <div class="form-group"> 
        <label for="_opciones_opcion" class="col-sm-2 control-label"><?php _t("Opcion"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_opciones_opcion" id="_opciones_opcion" placeholder="<?php _t("Opcion"); ?>" value="<?php echo $_opciones_opcion; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_opciones_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
        <div class="col-sm-10"> 
            <textarea disabled class="form-control" name="_opciones_valor" id="_opciones_valor" placeholder="<?php _t("Valor"); ?>"><?php echo $_opciones_valor; ?></textarea> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_opciones_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_opciones_grupo" id="_opciones_grupo" placeholder="<?php _t("Grupo"); ?>" value="<?php echo $_opciones_grupo; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
        </div> 
    </div>     
</form> 

<a href="index.php?p=_opciones&c=txt&_opciones_id=<?php echo $_opciones_id; ?>">Formato texto</a> 
