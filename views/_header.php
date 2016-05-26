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
    if (strpos($url_actual, 'login.php') !== false or strpos($url_actual, 'iniciar-sesion') !== false)
    echo '
    <title>WashApp - Ingresar</title>';
    elseif (strpos($url_actual, 'register.php') !== false or strpos($url_actual, 'registro') !== false)
    echo '
    <title>WashApp - Registrar cliente</title>';
    elseif (strpos($url_actual, 'registrar-turno') !== false)
    echo '
    <title>WashApp - Registrar turno de lavado</title>';
    elseif (strpos($url_actual, 'solicitar-plan') !== false)
    echo '
    <title>WashApp - Solicitar plan de lavado</title>';
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
    ?>

    <script>
      (function () {

        var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function () {
          var index = $('.bs-component').index($(this).parent());
          $.get(window.location.href, function (data) {
            var html = $(data).find('.bs-component').eq(index).html();
            html = cleanSource(html);
            $("#source-modal pre").text(html);
            $("#source-modal").modal();
          })

        });

        $(".bs-component").hover(function () {
          $(this).append($button);
          $button.show();
        }, function () {
          $button.hide();
        });

        function cleanSource(html) {
          var lines = html.split(/\n/);

          lines.shift();
          lines.splice(-1, 1);

          var indentSize = lines[0].length - lines[0].trim().length,
              re = new RegExp(" {" + indentSize + "}");

          lines = lines.map(function (line) {
            if (line.match(re)) {
              line = line.substring(indentSize);
            }

            return line;
          });

          lines = lines.join("\n");

          return lines;
        }

        $(".icons-material .icon").each(function () {
          $(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
        });

      })();

    </script>

    <?php
    echo '
    <script src="'.$site_url.'/js/ripples.min.js"></script>
    <script src="'.$site_url.'/js/material.min.js"></script>';

    if (strpos($url_actual, 'lista-empleados') !== false or strpos($url_actual, 'operador/ver-turnos') !== false)
    echo '
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tipsy/1.0.3/jquery.tipsy.min.css" type="text/css" />';

    // JQuery Select, UI, Datetimepicker
    echo '
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" type="text/css" />';
    ?>

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
            <?php
            echo '
            <li'; if (strpos($url_actual, 'reports.php') !== false or strpos($url_actual, 'informes') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/informes">Informes</a></li>
            <li'; if (strpos($url_actual, 'register.php') !== false or strpos($url_actual, 'registro') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/registro">Registrarse</a></li>
            <li'; if (strpos($url_actual, 'login.php') !== false or strpos($url_actual, 'iniciar-sesion') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/iniciar-sesion">Iniciar sesión</a></li>';
            echo '
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Turnos <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'registrar-turno') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/registrar-turno">Registrar turno</a></li>
                <li'; if (strpos($url_actual, 'mis-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/mis-turnos">Mis turnos</a></li>
                <li'; if (strpos($url_actual, 'confeccionar-hoja-de-ruta') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/confeccionar-hoja-de-ruta">Confeccionar hoja de ruta</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planes <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'solicitar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/solicitar-plan">Solicitar plan</a></li>
                <li'; if (strpos($url_actual, 'planificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/planificar-plan">Planificar plan</a></li>
                <li'; if (strpos($url_actual, 'modificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/modificar-plan">Modificar plan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipos de lavado <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'tipos-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado">Ver tipos de lavado</a></li>
                <li'; if (strpos($url_actual, 'agregar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-tipo-de-lavado">Agregar tipo</a></li>
                <li'; if (strpos($url_actual, 'editar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-tipo-de-lavado">Editar tipo</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'lista-empleados') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/lista-empleados">Lista de empleados</a></li>
                <li'; if (strpos($url_actual, 'agregar-empleado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-empleado">Agregar</a></li>
                <li'; if (strpos($url_actual, 'editar-empleado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-empleado">Editar</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'servicios/registrar-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/registrar-servicio">Registrar servicios</a></li>
                <li'; if (strpos($url_actual, 'servicios/editar-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/editar-servicio">Editar servicios</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operador <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'operador/registrar-turno') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/operador/registrar-turno">Registrar turno</a></li>
                <li'; if (strpos($url_actual, 'operador/registrar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/operador/registrar-plan">Registrar solicitud de plan</a></li>
                <li'; if (strpos($url_actual, 'operador/ver-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/operador/ver-turnos">Ver turnos de lavado</a></li>
              </ul>
            </li>';
            
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

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
