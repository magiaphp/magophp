<?php
if (file_exists("../admin/bd.php")) {
    header("Location: index.php");
}
include "../admin/configuracion.php";
include "../admin/funciones.php";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Instalacion de mago</title>
        <meta name="description" content="Admin gestion system: magia_php">
        <meta name="author" content="Robinson Coello S.">                        
        <meta name="author" content="Magia_php">                        
        <link rel="icon" href="favicon.ico">



        <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../includes/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="home/vista/gestion.css" >
        <link rel="stylesheet" href="estilo.css"/>




    </head>

    <body>



        <div class="container-fluid"> <!-- 1 -->
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4"></div>
                <div class="col-sm-12 col-md-6 col-lg-4 text-center"><?php //logo(); ?></div>                
            </div>


            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4"></div>
                <div class="col-sm-12 col-md-6 col-lg-4"> <!-- 3 -->                                        

                    
                    <p>Llenar con los datos corectos</p>



                    <hr>
                    <p>Listo!, la coneccion a la base de datos esta correcta, puede seguir con la instalacion</p>
                    <form method="post" action="instalar3.php">                                             
                        <button type="submit" class="btn btn-default">Seguir >></button>
                    </form>                    


                    <hr>
                    <p>
                        ERROR!, hubo un error porfavor conpruebe que los datos introducidos sean corrrectos
                    </p>
                    <form method="post" action="instalar.php">                                             
                        <button type="submit" class="btn btn-default"><< Regresar</button>
                    </form>   
                    <hr>
                        
                       
                        
                        




                </div>	  <!-- /3 --> 

            </div>  <!-- /2 -->
        </div>	<!-- /1 -->

        
        <?php
// include "home/vista/footer.php";
        ?>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../includes/bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
