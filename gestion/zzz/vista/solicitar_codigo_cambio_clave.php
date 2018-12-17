<form class="form-signin" name="" method="post" action="z_index.php">

    <input type="hidden" name="p" value="zzz">
    <input type="hidden" name="c" value="zz_sccc">
    <input type="hidden" name="a" value="zz_sccc">

    <div class="form-group">
        <label for="email"><?php _t('Email'); ?></label>
        <input 
            type="email" 
            class="form-control" 
            id="email" 
            name="email" 
            placeholder="<?php _t('Escriba aca su email'); ?>">
    </div>


    <?php
    //  captcha_html();
    ?>

    <button type="submit" class="btn btn-danger"><?php _t('Recuperar'); ?></button>
    <a href="z_index.php"><?php _t("Regresar"); ?></a>


</form>

