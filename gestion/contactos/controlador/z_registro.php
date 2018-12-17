<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    
   
    
    if (isset($_REQUEST['a']) == 'auto_registro') {
        
        include "./contactos/reg/post.php";
        
        // si no se envia email
        if(!$contactos_email){
            mensaje('info', 'Olvido email'); 
            die();
        }
        
        
        // si ya existe
        if(contactos_campo_segun_email('id', $contactos_email)){
            mensaje('info', 'Email ya existe en la base de datos'); 
            die();
        }
        
        

        include "./contactos/modelos/crear.php";
            
        // procedemos a registrar el login 
        $contactos_grupo = $config_grupo_por_defecto;     
        // asiganmos un estatus 
        $contactos_estatus = 0; //bloqueado
        // generamos una clave automatica        
        $contactos_clave = genera_clave();

        include "./contactos/modelos/reg_login.php";
        

                
        echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';  
        
        
        
    } else {
        include "./contactos/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 


if ($config_debug) {
    // Tabla para ver los permisos de cada grupo de usuarios en la pagina presente 
    permisos_plugin_controlador($pagina, $accion);
    
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$accion" => "$accion",
        "\$pagina" => "$pagina",
        "\$_usuarios_grupo" => "$_usuarios_grupo",
        "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)" => permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "$autos_id" => "$autos_id"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}