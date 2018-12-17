<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Editar _permisos"); ?></h2> 

</h2> 
<?php
mensaje("atencion", "Una mala manipulación puede comprometer la seguridad de su sistema");
?>


<form class="form-horizontal" method="post" action="index.php"> 
    <input type="hidden" name="p" value="_permisos"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="a" value="editar"> 
    <input type="hidden" name="_permisos_id" value="<?php echo $_permisos_id; ?>"> 

    <div class="form-group"> 
        <label for="_permisos_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="_permisos_grupo" >
                <?php _grupos_add($_permisos_grupo); ?>
            </select>
            <?php //echo $_permisos_grupo; ?>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_permisos_pagina" class="col-sm-2 control-label"><?php _t("Pagina"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="_permisos_pagina">
                <?php _paginas_add($_permisos_pagina); ?>
            </select>
            <?php //echo $_permisos_pagina; ?>
        </div> 
    </div> 

<?php /*
    <div class="form-group"> 
        <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Permiso"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_permisos_permiso" id="_permisos_permiso" placeholder="<?php _t("Permiso"); ?>" value="<?php echo $_permisos_permiso; ?>"   > 
        </div> 
    </div> 
 * 
 */ ?>


    <div class="form-group"> 
        <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Ver"); ?></label> 
        <div class="col-sm-10"> 
            
            <label class="radio-inline">
                <input type="radio" name="ver" id="ver" value="1" <?php echo $v_1_checked; ?>> <?php _t('Si'); ?>
            </label>
            <label class="radio-inline">
                <input type="radio" name="ver" id="ver" value="0" <?php echo $v_0_checked; ?> > <?php _t('No'); ?>
            </label>

        </div> 
    </div> 
    <div class="form-group"> 
        <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Crear"); ?></label> 
        <div class="col-sm-10"> 
            
            <label class="radio-inline">
                <input type="radio" name="crear" id="crear" value="1" <?php echo $c_1_checked; ?>> <?php _t('Si'); ?>
            </label>
            <label class="radio-inline">
                <input type="radio" name="crear" id="crear" value="0" <?php echo $c_0_checked; ?>> <?php _t('No'); ?>
            </label>

        </div> 
    </div> 
    <div class="form-group"> 
        <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Editar"); ?></label> 
        <div class="col-sm-10"> 
            
            <label class="radio-inline">
                <input type="radio" name="editar" id="editar" value="1" <?php echo $e_1_checked; ?>> <?php _t('Si'); ?>
            </label>
            <label class="radio-inline">
                <input type="radio" name="editar" id="editar" value="0" <?php echo $e_0_checked; ?>> <?php _t('No'); ?>
            </label>

        </div> 
    </div> 
    <div class="form-group"> 
        <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Borrar"); ?></label> 
        <div class="col-sm-10"> 
            
            <label class="radio-inline">
                <input type="radio" name="borrar" id="borrar" value="1" <?php echo $b_1_checked; ?>> <?php _t('Si'); ?>
            </label>
            <label class="radio-inline">
                <input type="radio" name="borrar" id="borrar" value="0" <?php echo $b_0_checked; ?>> <?php _t('No'); ?>
            </label>
            

        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
        </div> 
    </div>     
</form> 
