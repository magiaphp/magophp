<?php
session_start("magia_php");
include "../admin/bd.php";
include "../admin/coneccion.php";

$a = mysql_real_escape_string($_REQUEST['a']);

if ($a == 'login') {

    if ($_POST['username']) {

        $username = mysql_real_escape_string($_REQUEST['username']);
        $password = mysql_real_escape_string($_REQUEST['password']);

        if (!$username) {
            //header("Location: z_index.php");
            echo "Forget your login";
            array_push($errores, 'olvido el email');
        }

        if (!$password) {
           // header("Location: z_index.php");
            array_push($errores, 'Olvido la clave');
        }

        if ($username) {
            $query = mysql_query("SELECT usuario,clave "
                    . "FROM _usuarios "
                    . "WHERE usuario = '$username'")

                    or die("<h1>Errores</h1> "
                            . "<b>Carpeta:</b>: " . __DIR__ . "<br>"
                            . "<b>Documento:</b>:" . __FILE__ . "<br>"
                            . "<b>Linea:</b>:" . __LINE__ . "<br>"
                            . "<b>Error SQL:</b>:" . mysql_error() . "<br>");

            $reg = mysql_fetch_array($query);

            if (password_verify($password, $reg['clave'])) {
              //  header("Location: index.php");
                echo "<a href=\"index.php\">"._tr('Ingresar al sistema')."</a>";
                echo '<meta http-equiv="refresh" content="0; url=index.php">';  
                
                $_SESSION["s_username"] = $reg['usuario'];
            } else {
                header("Location: z_index.php");
                echo "Login error";
                array_push($errores, 'Datos incorrectos');
            }
        }
    }
}


