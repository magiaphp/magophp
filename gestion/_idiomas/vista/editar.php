<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Editar _idiomas"); ?></h2> 

</h2> 

<form class="form-horizontal" method="post" action="index.php"> 
    <input type="hidden" name="p" value="_idiomas"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="a" value="editar"> 
    <input type="hidden" name="_idiomas_id" value="<?php echo $_idiomas_id; ?>"> 

    <div class="form-group"> 
        <label for="_idiomas_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_idiomas_idioma" id="_idiomas_idioma" placeholder="<?php _t("Idioma"); ?>" value="<?php echo $_idiomas_idioma; ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_idiomas_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_idiomas_nombre" id="_idiomas_nombre" placeholder="<?php _t("Nombre"); ?>" value="<?php echo $_idiomas_nombre; ?>"   > 
        </div> 
    </div> 
    
    <div class="form-group"> 
        <label for="_idiomas_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
        <div class="col-sm-10"> 
            <input type="number" class="form-control" name="_idiomas_orden" id="_idiomas_orden" placeholder="<?php _t("Orden"); ?>" value="<?php echo $_idiomas_orden; ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
        </div> 
    </div>     
</form> 
