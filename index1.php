<html>
<?php
include("/config.php");

echo '
    <link rel="icon" href="'.$site_url.'/favicon.png">

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Material Design -->
    <link href="'.$site_url.'/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="'.$site_url.'/css/ripples.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="'.$site_url.'/css/estilos.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="'.$site_url.'/js/actions.min.js"></script>';

//include("views/_header.php");
//include("views/_footer.php");


     echo ' <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informes <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li><a href="'.$site_url.'/agregar.html">Clientes</a></li>
                <li><a href="'.$site_url.'/lista.html">Empleados</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li> ';

?>
</html>

