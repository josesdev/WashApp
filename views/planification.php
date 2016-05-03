<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<h3 class="center">Planificar plan de lavado</h3>

<form method="post" action="/" name="loginform">
<div class="form-group register">
    <ul class="list-group">
      <li class="list-group-item list-group-item-success m">¡Su plan de lavado ha sido aprobado!</li>
    </ul>
    <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
    <select class="selectpicker" name="type_vehicle" disabled="disabled">
        <option>Pickup</option>
        <option>Sedán</option>
        <option>Camioneta 4x4</option>
        <option>Camión</option>
    </select>
    <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
    <input type="text" class="form-control" id="wash_vehicles_cant" disabled="disabled" value="25"></input>
    <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
    <select class="selectpicker" name="type_vehicle" disabled="disabled">
	    <option>Básico</option>
	    <option selected="selected">Completo</option>
	    <option>Ecológico</option>
    </select>
    <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
    <div id="period">
        <select class="selectpicker" name="wash_day" disabled="disabled">
            <option id="day1" selected="selected">1 día a la semana</option>
            <option id="day2">2 días a la semana</option>
            <option id="day3">3 días a la semana</option>
        </select>
    </div>
    <label for="wash_place" class="col-lg-4 control-label">Centro de lavado</label>
    <select class="selectpicker" data-size="5">
      <option data-subtext="French 414, Resistencia">WashApp Centro</option>      
      <option data-subtext="Av. Sarmiento 2855, Resistencia">WashApp Centenario</option>
      <option data-subtext="Lopez y Planes 75, Resistencia">WashApp 2</option>
      <option data-divider="true"></option>
      <option data-subtext="Av. 3 de Abril y Av. Maipú, Corrientes">WashApp Corrientes</option>
    </select>
    <label for="wash_day" class="col-lg-4 control-label">Día 1</label>
    <input type="text" class="form-control" id="wash_day"></input>
    <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
    <select class="selectpicker">
      <option>8:00</option>
      <option disabled>9:00</option>
      <option>10:00</option>
      <option>11:00</option>
    </select>

    <input type="submit" class="btn btn-success submitL" name="login" value="Actualizar plan" />
</div>
</form>

<script type="text/javascript">
$(function() {
    $("#wash_day").datepicker();
    $(".selectpicker").selectpicker();
  });
</script>

<?php include('_footer.php'); ?>
