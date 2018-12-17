<?php
/**
  magia_version: 0.0.11
 * */
//session_start("magia_php") ;
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//include "z_verificar.php";
include "admin/bd.php";
include "admin/configuracion.php";
include "admin/coneccion.php";
include "admin/conec.php";
include "admin/funciones.php";
include "admin/getbootstrap.php";
include "admin/permisos.php";
include "admin/traductor.php";
include "admin/contenido.php";
include "admin/formularios.php";
include "admin/menu.php";
include "admin/paginacion.php";
_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";
$p = (isset($_REQUEST["p"])) ? $_REQUEST["p"] : "home";
$c = (isset($_REQUEST["c"])) ? $_REQUEST["c"] : "index";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Magia_php <?php echo magia_version(); ?></title>

        <!-- Bootstrap core CSS -->
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



        <link href="carrusel.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>

    <body>


        <div class="navbar-wrapper">
            <div class="container">
                <?php include "nav_superior.php"; ?>

            </div>
        </div>



        <?php // include "carrusel.php"; ?>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-2">



                    <hr>


                </div>
                <div class="col-lg-8">
                    <div class="row">

                        
                        <hr>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                        <hr>


                        <?php
                      //  echo $p;
                    //    include "./gestion/$p/controlador/$c.php";
                        ?>
                        <?php
                        //  include "./gestion/empresas/controlador/publico/index.php";
                        ?>
                        <?php
                        //include "./gestion/empresas/controlador/publico/index.php";
                        ?>





                        



                    </div>
                </div>

                <div class="col-lg-2">

                    <hr>

                    


                    


                </div>


            </div>


<?php
/*            <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7">
  <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It ll blow your mind.</span></h2>
  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
  <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7 col-md-push-5">
  <h2 class="featurette-heading">Oh yeah, it s that good. <span class="text-muted">See for yourself.</span></h2>
  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5 col-md-pull-7">
  <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7">
  <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
  <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES --> */
?>


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="includes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


    </body>
</html>

