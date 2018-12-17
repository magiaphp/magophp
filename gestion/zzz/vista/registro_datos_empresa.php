
<form class="form-horizontal" action="z_index.php" method="post"> 
    
    <input type="hidden" name="p" value="zzz">
    <input type="hidden" name="c" value="auto_registro">
    <input type="hidden" name="a" value="auto_registro">

    
    <input type="hidden" name="contactos_email" value="<?php echo $email; ?>"> 


    <div class="form-group"> 
        <label for="contactos_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
        <div class="col-sm-10"> 
            <p><?php echo $email; ?></p>
        </div> 
    </div> 



    <div class="form-group"> 
        <label for="contactos_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" id="contactos_idioma" name="contactos_idioma" >
                <?php _idiomas_add(); ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_empresa" class="col-sm-2 control-label"><?php _t("Empresa"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_empresa" 
                id="contactos_empresa" 
                placeholder="<?php _t("Empresa SPRL"); ?>" value=""   > 
        </div> 
    </div> 




    <div class="form-group"> 
        <label for="contactos_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_contacto" 
                id="contactos_contacto" 
                placeholder="<?php _t("Nombres y apellidos"); ?>" value=""   > 
        </div> 
    </div> 





    <div class="form-group"> 
        <label for="contactos_numero_documento" class="col-sm-2 control-label"><?php _t("TVA"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_numero_documento" 
                id="contactos_numero_documento" 
                placeholder="<?php _t("123.123.123"); ?>" value=""   > 
        </div> 
    </div> 




    <hr>

    <div class="form-group"> 
        <label for="contactos_direccion" class="col-sm-2 control-label"><?php _t("Dirección"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_direccion" 
                id="contactos_direccion" placeholder="<?php _t("Av. Louise 265"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_cpostal" class="col-sm-2 control-label"><?php _t("Código postal"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_cpostal" 
                id="contactos_cpostal" 
                placeholder="<?php _t("1000"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_ciudad" 
                id="contactos_ciudad" 
                placeholder="<?php _t("Bruxelles"); ?>" value=""   > 
        </div> 
    </div> 




    <div class="form-group"> 
        <label for="contactos_pais" class="col-sm-2 control-label"><?php _t("País"); ?></label> 
        <div class="col-sm-10"> 


            <input 
                type="text" 
                class="form-control" 
                name="contactos_pais" 
                id="contactos_pais" 
                placeholder="<?php _t("Belgique"); ?>" value="Belgique"   > 

        </div> 
    </div> 




    <div class="form-group"> 
        <label for="contactos_tel" class="col-sm-2 control-label"><?php _t("Tel"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_tel" 
                id="contactos_tel" 
                placeholder="<?php _t("+322123456"); ?>" value=""   > 
        </div> 
    </div> 

    <div class="form-group"> 
        <label for="contactos_tel" class="col-sm-2 control-label"><?php _t("Condiciones"); ?></label> 
        <div class="col-sm-10"> 
            <textarea class="form-control">
Al registrarse esta aceptando las siguientes condiciones                 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc semper posuere mauris, vitae aliquet tortor tempus eu. Integer non consectetur urna. Curabitur sit amet lobortis ex, et pellentesque ligula. Mauris odio dui, maximus vel congue et, luctus rutrum elit. Maecenas eleifend rutrum lectus. Donec libero sapien, mollis vel augue sed, mollis volutpat enim. Maecenas eu malesuada enim. Nam in felis sed leo hendrerit ullamcorper.

Nullam a egestas nulla, et fringilla orci. Donec porta lacus ut turpis aliquet, quis laoreet urna ultricies. Cras efficitur elementum nulla, vitae tristique eros mattis ac. Sed viverra commodo convallis. Fusce cursus ex augue, eu vehicula leo rutrum nec. Donec tempus posuere posuere. Nam iaculis tempor est at pellentesque. Aenean congue, neque et congue pretium, mauris turpis viverra elit, ut tristique nunc augue eu magna. Integer in mi nisi. Nulla facilisi. Maecenas volutpat quam non enim scelerisque, id faucibus ligula suscipit. Maecenas aliquam nunc vitae quam laoreet mollis. Cras et posuere tortor.

Suspendisse quis lorem vel erat efficitur rhoncus at nec dolor. Etiam quis tincidunt augue. Suspendisse lorem orci, aliquet at purus nec, aliquam lacinia sapien. Nulla accumsan dictum rutrum. Nunc lacinia enim sit amet iaculis aliquet. Nunc enim urna, scelerisque eu sagittis eu, rhoncus ac justo. Fusce condimentum egestas sem congue semper. Praesent id auctor sapien. 
            </textarea>
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 


