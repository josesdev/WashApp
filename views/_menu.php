<?php
echo '
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
          <a class="navbar-brand" href="'. $site_url .'" style="font-size: 28px;"><img src="'.$site_url.'/images/logo_w.png" height="30" width="30" style="float: left; margin-right: 10px;"/> WashApp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">';

// Usuario no logueado
if(!isset($_COOKIE["menu"])) {
            echo '
            <li'; if (strpos($url_actual, 'login.php') !== false or strpos($url_actual, 'iniciar-sesion') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/iniciar-sesion">Iniciar sesión</a></li>
            <li'; if (strpos($url_actual, 'register.php') !== false or strpos($url_actual, 'registro') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/registro">Registrarse</a></li>';          
}
// Para los desarrolladores, todos los menús de todos los tipos de usuarios
elseif($_COOKIE["menu"] == "super") {
            echo '
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cliente Particular <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'registrar-turno') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/registrar-turno">Registrar turno</a></li>
                <li'; if (strpos($url_actual, 'mis-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/mis-turnos">Mis turnos</a></li>
                <li'; if (strpos($url_actual, 'tipos-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado">Ver tipos de lavado</a></li>';
                echo '
              </ul>
            </li>

            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cliente Corporativo <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'solicitar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/solicitar-plan">Solicitar plan</a></li>
                <li'; if (strpos($url_actual, 'planificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/planificar-plan">Planificar plan</a></li>
                <li'; if (strpos($url_actual, 'modificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/modificar-plan">Modificar plan</a></li>
                <li'; if (strpos($url_actual, 'tipos-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado">Ver tipos de lavado</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enc. de Playa <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'ver-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/encargado-playa/ver-turnos">Ver turnos del día</a></li>
                <li'; if (strpos($url_actual, 'actualizar-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/encargado-playa/actualizar-turnos">Actualizar estados de turnos</a></li>                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enc. Externo <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'confeccionar-hoja-de-ruta') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/confeccionar-hoja-de-ruta">Confeccionar hoja de ruta</a></li>
                <li'; if (strpos($url_actual, 'lista-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/lista-servicio">Lista de servicios realizados</a></li>
                <li'; if (strpos($url_actual, 'registrar-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/registrar-servicio">Registrar servicio realizado</a></li>
                <li'; if (strpos($url_actual, 'externo/actualizar-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/externo/actualizar-turnos">Actualizar turnos</a></li>
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
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador <span class="caret"></span></a>
              <ul class="dropdown-menu active">
                <li'; if (strpos($url_actual, 'reports.php') !== false or strpos($url_actual, 'informes') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/informes">Informes</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Tipos de lavado</li>
                <li'; if (strpos($url_actual, 'tipos-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado">Ver tipos de lavado</a></li>
                <li'; if (strpos($url_actual, 'agregar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-tipo-de-lavado">Agregar tipo de lavado</a></li>
                <li'; if (strpos($url_actual, 'editar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-tipo-de-lavado">Editar tipo de lavado</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Empleados</li>
                <li'; if (strpos($url_actual, 'lista-empleados') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/lista-empleados">Lista de empleados</a></li>
                <li'; if (strpos($url_actual, 'agregar-empleado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-empleado">Agregar empleado</a></li>
                <li'; if (strpos($url_actual, 'editar-empleado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-empleado">Editar empleado</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Insumos</li>
                <li'; if (strpos($url_actual, 'lista-insumos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/lista-insumos">Lista de insumos</a></li>
                <li'; if (strpos($url_actual, 'agregar-insumo') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-insumo">Agregar insumo</a></li>
                <li'; if (strpos($url_actual, 'editar-insumo') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-insumo">Editar insumo</a></li>
                <li'; if (strpos($url_actual, 'insumos-cantidad') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/insumos-cantidad">Cantidad de insumos</a></li>
              </ul>
            </li>
    </ul>
  </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Super <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="'.$site_url.'/cerrar-sesion">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>';
}
elseif($_COOKIE["menu"] == "particular") {
  echo '
  <li'; if (strpos($url_actual, 'registrar-turno') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/registrar-turno">Registrar turno</a></li>
  <li'; if (strpos($url_actual, 'mis-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/mis-turnos">Mis turnos</a></li>
  <li'; if (strpos($url_actual, 'tipos-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado-particular">Ver tipos de lavado</a></li>
    </ul>
  </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Cliente Particular <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="'.$site_url.'/cerrar-sesion">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>';
}
elseif($_COOKIE["menu"] == "corporativo") {
  echo '
  <li'; if (strpos($url_actual, 'solicitar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/solicitar-plan">Solicitar plan</a></li>
  <li'; if (strpos($url_actual, 'planificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/planificar-plan">Planificar plan</a></li>
  <li'; if (strpos($url_actual, 'modificar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/clientes/modificar-plan">Modificar plan</a></li>
  <li'; if (strpos($url_actual, 'tipos-de-lavado-corporativo') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado-corporativo">Ver tipos de lavado</a></li>
    </ul>
  </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Cliente Corporativo <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="'.$site_url.'/cerrar-sesion">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>';
}
elseif($_COOKIE["menu"] == "playa") {
  echo '
  <li'; if (strpos($url_actual, 'ver-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/encargado-playa/ver-turnos">Ver turnos del día</a></li>
  <li'; if (strpos($url_actual, 'actualizar-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/encargado-playa/actualizar-turnos">Actualizar estados de turnos</a></li>
    </ul>
  </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Encargado de Playa <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="'.$site_url.'/cerrar-sesion">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>';
}
elseif($_COOKIE["menu"] == "externo") {
  echo '
  <li'; if (strpos($url_actual, 'confeccionar-hoja-de-ruta') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/confeccionar-hoja-de-ruta">Confeccionar hoja de ruta</a></li>
  <li'; if (strpos($url_actual, 'lista-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/lista-servicio">Lista de servicios realizados</a></li>
  <li'; if (strpos($url_actual, 'registrar-servicio') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/servicios/registrar-servicio">Registrar servicio realizado</a></li>
  <li'; if (strpos($url_actual, 'externo/actualizar-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/externo/actualizar-turnos">Actualizar turnos</a></li>
    </ul>
  </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Encargado Externo <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="'.$site_url.'/cerrar-sesion">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>';
}
elseif($_COOKIE["menu"] == "operador") {
  echo'
  <li'; if (strpos($url_actual, 'operador/registrar-turno') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/operador/registrar-turno">Registrar turno</a></li>
  <li'; if (strpos($url_actual, 'operador/registrar-plan') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/operador/registrar-plan">Registrar solicitud de plan</a></li>
  <li'; if (strpos($url_actual, 'operador/ver-turnos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/operador/ver-turnos">Ver turnos de lavado</a></li>
    </ul>
  </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Operador <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="'.$site_url.'/cerrar-sesion">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>';
}
elseif($_COOKIE["menu"] == "administrador") {
  echo '
  <li'; if (strpos($url_actual, 'reports.php') !== false or strpos($url_actual, 'informes') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/informes">Informes</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipos de lavado <span class="caret"></span></a>
    <ul class="dropdown-menu active">
      <li'; if (strpos($url_actual, 'tipos-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/tipos-de-lavado">Ver tipos de lavado</a></li>
      <li'; if (strpos($url_actual, 'agregar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-tipo-de-lavado">Agregar tipo de lavado</a></li>
      <li'; if (strpos($url_actual, 'editar-tipo-de-lavado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-tipo-de-lavado">Editar tipo de lavado</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>
    <ul class="dropdown-menu active">
      <li'; if (strpos($url_actual, 'lista-empleados') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/lista-empleados">Lista de empleados</a></li>
      <li'; if (strpos($url_actual, 'agregar-empleado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-empleado">Agregar empleado</a></li>
      <li'; if (strpos($url_actual, 'editar-empleado') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-empleado">Editar empleado</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Insumos <span class="caret"></span></a>
    <ul class="dropdown-menu active">
      <li'; if (strpos($url_actual, 'lista-insumos') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/lista-insumos">Lista de insumos</a></li>
      <li'; if (strpos($url_actual, 'agregar-insumo') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/agregar-insumo">Agregar insumo</a></li>
      <li'; if (strpos($url_actual, 'editar-insumo') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/editar-insumo">Editar insumo</a></li>
      <li'; if (strpos($url_actual, 'insumos-cantidad') !== false) echo ' class="active"'; echo '><a href="'.$site_url.'/insumos-cantidad">Cantidad de insumos</a></li>
    </ul>
  </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Administrador <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="'.$site_url.'/cerrar-sesion">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>';
}


echo '
        </div><!--/.nav-collapse -->
      </div>
    </nav>';

?>