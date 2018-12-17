<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <?php echo $config_nombre_web; ?>
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><?php _t('Inicio'); ?></a></li>
                <li><a href="index.php?p=pedidos"><?php _t('Pedidos'); ?></a></li>



                <?php //_menu_top(); ?>



                <li class="dropdown">
                    <a href="#" 
                       class="dropdown-toggle" 
                       data-toggle="dropdown" 
                       role="button" 
                       aria-haspopup="true" 
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 
                        <?php echo _t("Idiomas"); ?>
                        <span class="caret"></span>
                    </a>
                        
                        
                    <ul class="dropdown-menu">
                    <?php 
                    foreach (_idiomas_array() as $key => $iso) {
                        echo '<li>
                            <a href="index.php?p=cambiar_idioma&c=cambiar_idioma&idioma='.$iso.'&a=cambiar_idioma">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 
                                    '. _idiomas_segun_iso($iso).'
                            </a>
                        </li>'; 
                    }
                    ?>    
                    </ul>
                </li>


                
                
                
                


                <li class="dropdown">
                    <a href="#" 
                       class="dropdown-toggle" 
                       data-toggle="dropdown" 
                       role="button" 
                       aria-haspopup="true" 
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                        <?php echo $_usuarios_usuario; ?>
                        <span class="caret"></span>
                    </a>
                        
                        
                    <ul class="dropdown-menu">


                        <li>
                            <a href="index.php?p=_usuarios&c=cambiar_clave">
                                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 
                                    <?php echo _t('Cambiar clave'); ?>
                            </a>
                        </li>

                        


                        <li>
                            
                        <a href="z_logout.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span> 
                                <?php echo _t('Logout'); ?></a>
                        </li>

                    </ul>
                </li>


                
                
                
                
                
                
                
                
                
                
                
            </ul>
        </div>


    </div>
</nav>
