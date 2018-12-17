
<h2><?php _t('Cambio de clave'); ?></h2>                    

<form class="form-signin" name="" method="post" action="z_index.php">
    <input type="hidden" name="p" value="zzz">
    <input type="hidden" name="c" value="zz_vccc">
    <input type="hidden" name="a" value="zz_vccc">


    <div class="form-group">
        <label for="codigo"><?php _t('Código'); ?></label>
        <input 
            type="text" 
            class="form-control" 
            id="codigo" 
            name="codigo" placeholder="">
    </div>
    
    <div class="form-group">
        <label for="email"><?php _t('E-mail'); ?></label>
        <input              
            type="email" 
            class="form-control" 
            id="email" 
            name="email" placeholder="">
    </div>

    <div class="form-group">
        <label for="clave"><?php _t('Nueva clave'); ?></label>
        <input 
            type="text" 
            class="form-control" 
            id="clave" 
            name="clave" placeholder="">
    </div>                        

    <?php
    //  captcha_html();
    ?>

    <button type="submit" class="btn btn-primary"><?php _t('Entrar'); ?></button>


    

</form>


