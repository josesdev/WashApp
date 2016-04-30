<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.php'); 
$url_actual = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php
    // Titulos de las diferentes paginas
    if (strpos($url_actual, 'login.php') !== false)
    echo '
    <title>WashApp - Ingresar</title>';
    elseif (strpos($url_actual, 'register.php') !== false)
    echo '
    <title>WashApp - Registrar cliente</title>';
    else
      echo '
      <title>WashApp</title>';
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
    echo '
    <link rel="icon" href="'.$site_url.'/favicon.png">';
    ?>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilos.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
          echo '
          <a class="navbar-brand" href="'. $site_url .'" style="font-size: 28px;">WashApp</a>';
          ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informes <span class="caret"></span></a>
                <ul class="dropdown-menu active">
                  <li><a href="/agregar.html">Clientes</a></li>
                  <li><a href="/lista.html">Empleados</a></li>
                  <li role="separator" class="divider"></li>
                </ul>
              </li>
            <?php
            echo '
            <li'; if (strpos($url_actual, 'register.php') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/register.php">Registrarse</a></li>
            <li'; if (strpos($url_actual, 'login.php') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/login.php">Iniciar sesión</a></li>';
            ?>
          </ul>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input class="form-control" placeholder="Buscar" type="text">
            </div>
            <button type="submit" class="btn btn-info">Buscar</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main" style="margin-top: 90px;">

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
