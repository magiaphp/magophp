<?php

if (isset($_REQUEST['a']) == 'editar') {

    $email = mysql_real_escape_string($_REQUEST['email']);
    $idioma = mysql_real_escape_string($_REQUEST['idioma']);

<<<<<<< HEAD
    $variables = array(
        "\$accion" => "$accion",
        "\$pagina" => "$pagina",
        "\$_usuarios_grupo" => "$_usuarios_grupo",
        "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)" => permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "\$_REQUEST['a']" => "$_REQUEST[a]"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
=======
    include "./contactos/modelos/cambiar_idioma.php";
} else {
    mensaje("info", 'Error');
}
>>>>>>> des
