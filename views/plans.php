<?php include('_header.php');
require_once(__ROOT__.'/config.php'); 
?>

<h3 class="center">Solicitar plan de lavado</h3>

<form method="post" action="/" name="loginform">
<div class="form-group register">
    <label for="user_name" class="col-lg-4 control-label">Tipo de vehículo</label>
    <select class="selectpicker" name="type_vehicle">
        <option>Pickup</option>
        <option>Sedán</option>
        <option>Camioneta 4x4</option>
        <option>Camión</option>
    </select>
    <label for="wash_vehicles_cant" class="col-lg-4 control-label">Cantidad</label>
    <input type="text" class="form-control" id="wash_vehicles_cant"></input>
    <label for="user_name" class="col-lg-4 control-label">Tipo de lavado</label>
    <select class="selectpicker" name="type_vehicle">
	    <option>Básico</option>
	    <option>Completo</option>
	    <option>Ecológico</option>
    </select>
    <label for="wash_period" class="col-lg-4 control-label">Periodicidad</label>
    <select class="selectpicker" name="wash_day">
        <option id="day1">1 día a la semana</option>
        <option id="day2">2 días a la semana</option>
        <option id="day3">3 días a la semana</option>
    </select>
    <div id="dia1">
        <label for="wash_day" class="col-lg-4 control-label">Día 1</label>
        <input type="text" class="form-control" id="wash_day"></input>
        <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
        <select class="selectpicker">
          <option>8:00</option>
          <option disabled>9:00</option>
          <option>10:00</option>
          <option>11:00</option>
        </select>
    </div>
    <div id="dia2" class="displayN">
        <label for="wash_day" class="col-lg-4 control-label">Día 2</label>
        <input type="text" class="form-control" id="wash_day"></input>
        <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
        <select class="selectpicker">
          <option>8:00</option>
          <option disabled>9:00</option>
          <option>10:00</option>
          <option>11:00</option>
        </select>
    </div>
    <div id="dia3" class="displayN">
        <label for="wash_day" class="col-lg-4 control-label">Día 3</label>
        <input type="text" class="form-control" id="wash_day"></input>
        <label for="wash_hour" class="col-lg-4 control-label">Hora</label>
        <select class="selectpicker">
          <option>8:00</option>
          <option disabled>9:00</option>
          <option>10:00</option>
          <option>11:00</option>
        </select>
    </div>

    <ul class="list-group">
      <li class="list-group-item list-group-item-warning">Recuerde que su plan de lavado será evaluado y un operador se comunicará con Usted dentro de las 48 hs.</li>
    </ul>

    <input type="submit" class="btn btn-success submitL" name="login" value="Registrar" />
</div>
</form>

<script type="text/javascript">
$(function() {
    $("#wash_day").datepicker();
    $(".selectpicker").selectpicker();
  });
$(document).ready(function(){
    $("li[data-original-index$='0']").click(function(){
        $("#dia2").hide();
        $("#dia3").hide();
    });
    $("li[data-original-index$='1']").click(function(){
        $("#dia2").show();
        $("#dia3").hide();
    });
    $("li[data-original-index$='2']").click(function(){
        $("#dia2").show();
        $("#dia3").show();
    });
});
</script>

<?php include('_footer.php'); ?>
