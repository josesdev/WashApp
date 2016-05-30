<?php
if($menu_tpi == 1) {
?>

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
            <li'; if (strpos($url_actual, 'login.php') !== false or strpos($url_actual, 'iniciar-sesion') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/iniciar-sesion">Iniciar sesión</a></li>
            <li'; if (strpos($url_actual, 'register.php') !== false or strpos($url_actual, 'registro') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/registro">Registrarse</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cliente Particular <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'registrar-turno') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/registrar-turno">Registrar turno</a></li>
                <li'; if (strpos($url_actual, 'mis-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/mis-turnos">Mis turnos</a></li>';
                echo '
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cliente Corporativo <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'solicitar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/solicitar-plan">Solicitar plan</a></li>
                <li'; if (strpos($url_actual, 'planificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/planificar-plan">Planificar plan</a></li>
                <li'; if (strpos($url_actual, 'modificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/modificar-plan">Modificar plan</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Encargado de Playa <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'ver-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/encargado-playa/ver-turnos">Ver turnos del día</a></li>
                <li'; if (strpos($url_actual, 'actualizar-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/encargado-playa/actualizar-turnos">Actualizar estados de turnos</a></li>                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Encargado Externo <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'confeccionar-hoja-de-ruta') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/confeccionar-hoja-de-ruta">Confeccionar hoja de ruta</a></li>
                <li'; if (strpos($url_actual, 'lista-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/lista-servicio">Lista servicio realizdo</a></li>
                <li'; if (strpos($url_actual, 'registrar-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/registrar-servicio">Registrar servicio realizdo</a></li>
              </ul>
            </li>';
            
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php
}
else{
?>

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
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro<span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'register.php') !== false or strpos($url_actual, 'registro') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/registro">Registrarse</a></li>                
                <li'; if (strpos($url_actual, 'login.php') !== false or strpos($url_actual, 'iniciar-sesion') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/iniciar-sesion">Iniciar sesión</a></li>';
                echo '
              </ul>
            </li>           
            
            
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
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Insumos <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'lista-insumos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/lista-insumos">Lista de insumos</a></li>
                <li'; if (strpos($url_actual, 'agregar-insumo') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-insumo">Agregar insumo</a></li>
                <li'; if (strpos($url_actual, 'editar-insumo') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-insumo">Editar insumo</a></li>
                <li'; if (strpos($url_actual, 'insumos-cantidad') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/insumos-cantidad">Cantidad de insumos</a></li>
              </ul>
            </li> ';
            
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<?php
}
?>