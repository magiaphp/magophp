<h2><?php _t('Administración'); ?></h2>                    

<form class="form-signin" name="" method="post" action="z_index.php">
    <input type="hidden" name="p" value="zzz">
    <input type="hidden" name="c" value="login">
    <input type="hidden" name="a" value="login">
    
    <div class="form-group">
        <label for="email"><?php _t('E-mail'); ?></label>
        <input 
            autofocus type="email" 
            class="form-control" 
            id="email" 
            name="username" placeholder="">
    </div>

    <div class="form-group">
        <label for="password"><?php _t('Clave'); ?></label>
        <input 
            type="password" 
            class="form-control" 
            id="password" 
            name="password" placeholder="">
    </div>                        

    <?php
    //  captcha_html();
    ?>

    <button type="submit" class="btn btn-primary"><?php _t('Entrar'); ?></button>

    <a href="z_index.php?c=registro"><?php _t("Registrarse"); ?></a>

    <a href="zz_recupera_clave.php"><?php _t("Clave perdida"); ?></a>
</form>



