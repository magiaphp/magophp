
<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="contactos"> 
    <input type="hidden" name="c" value="cambiar_clave_otros"> 
    <input type="hidden" name="a" value="cambiar_clave_otros"> 
    <input type="hidden" name="$t_usuarios_clave_nueva" value="<?php echo $_usuarios_usuario; ?>"> 


    <div class="form-group">
        <label for="usurio"><?php _t("Usuario"); echo $i; ?> </label>
        <input type="email" class="form-control" id="usurio" placeholder="Email" value="" readonly="">
    </div>




    <div class="form-group">
        <label for="t_usuarios_clave_nueva"><?php _t("Nueva clave"); ?></label>
        <input type="text" class="form-control" id="t_usuarios_clave_nueva" name="t_usuarios_clave_nueva" placeholder="" value="<?php echo genera_clave(); ?>">
    </div>




    <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button>


</form>