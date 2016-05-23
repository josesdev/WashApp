<?php include('_header.php');
require_once(__ROOT__.'/config.php');
$dia_actual = date('m/d/Y', time());
$dia_actual_20 = date('m/d/Y', (time() + (20 * 24 * 60 * 60)));
?>

<div class="col-lg-offset-3 col-lg-6">
  <div class="well bs-component">
    <h3 class="center">Planificar plan de lavado</h3>

    <form class="form-horizontal" method="post" action="/" name="loginform">
    <div class="center">
      <div class="alert plan plan alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>¡Su plan de lavado ha sido aprobado!</strong>.
      </div>
    </div>
    <div class="form-group">
        <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
        <div class="col-lg-6">
          <select class="selectpicker" name="type_vehicle" disabled="disabled">
            <option>Pickup</option>
            <option>Sedán</option>
            <option>Camioneta 4x4</option>
            <option>Camión</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
        <div class="col-lg-6">
          <input type="text" class="form-control" id="wash_vehicles_cant" disabled="disabled" value="25"></input>
        </div>
    </div>
    <div class="form-group">
        <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
        <div class="col-lg-6">
          <select class="selectpicker" name="type_vehicle" disabled="disabled">
      	    <option>Básico</option>
      	    <option selected="selected">Completo</option>
      	    <option>Ecológico</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
        <div class="col-lg-6">
          <div id="period">
            <select class="selectpicker" name="wash_day" disabled="disabled">
                <option id="day1" selected="selected">1 día a la semana</option>
                <option id="day2">2 días a la semana</option>
                <option id="day3">3 días a la semana</option>
            </select>
          </div>
        </div>
    </div>
    <div class="form-group">
        <label for="wash_place" class="col-lg-4 control-label">Centro de lavado</label>
        <div class="col-lg-6">
          <select class="selectpicker" data-size="5">
            <option data-subtext="French 414, Resistencia">WashApp Centro</option>
            <option data-subtext="Av. Sarmiento 2855, Resistencia">WashApp Centenario</option>
            <option data-subtext="Lopez y Planes 75, Resistencia">WashApp 2</option>
            <option data-divider="true"></option>
            <option data-subtext="Av. 3 de Abril y Av. Maipú, Corrientes">WashApp Corrientes</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label for="wash_day" class="col-lg-4 control-label">Día 1</label>
        <div class="col-lg-6">
          <select class="selectpicker" data-size="5">
            <option>Lunes</option>
            <option>Martes</option>
            <option>Miércoles</option>
            <option>Jueves</option>
            <option>Viernes</option>
            <option>Sábado</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
        <div class="col-lg-6">
          <select class="selectpicker">
        	  <option>8:00</option>
        	  <option disabled>9:00</option>
        	  <option>10:00</option>
        	  <option>11:00</option>
        	  <option disabled>16:00</option>
        	  <option>17:00</option>
        	  <option disabled>18:00</option>
        	  <option>19:00</option>
        	  <option>20:00</option>
          </select>
        </div>
    </div>
    <div class="center">
        <input type="submit" class="btn btn-raised btn-success" name="login" value="Actualizar plan" />
    </div>
    </div>
    </form>
  </div>
</div>

<?php include('_footer.php'); ?>
